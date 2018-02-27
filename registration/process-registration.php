<?php
  include_once '../config/database.php';
  include_once '../objects/registration.php';
  include_once '../user/session-check.php';
  
  if(
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['milan_id'], $_POST['name'], $_POST['college'], $_POST['phone'])
  ) {
    $database = new Database();
    $db = $database->getConnection();

    $registration = new Registration($db);

    if($registration->newRegistration($_POST['name'], $_POST['college'], $_POST['phone'], $_SESSION['user']['email'], $_POST['milan_id'])) {
      header('Location: ../registration/index.php?success');
    } else {
      header('Location: ../registration/index.php?failed');
    }
  } else {
    header('Location: ../registration/index.php?failed');
  }
?>
