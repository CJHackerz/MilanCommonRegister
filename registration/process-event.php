<?php
  include_once '../config/database.php';
  include_once '../objects/registration.php';
  include_once '../user/session-check.php';

  if(
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['milan_id'], $_POST['domain'], $_POST['event'])
  ) {
    $database = new Database();
    $db = $database->getConnection();

    $registration = new Registration($db);

    if($registration->updateEvent($_POST['milan_id'], $_POST['domain'], $_POST['event'])) {
      header('Location: ../registration/event.php?id=' . $_POST['milan_id'] . '&success');
    } else {
      header('Location: ../registration/event.php?id=' . $_POST['milan_id'] . '&failed');
    }
  } else {
    header('Location: ../registration/index.php?id=' . $_POST['milan_id'] . '&failed');
  }
?>
