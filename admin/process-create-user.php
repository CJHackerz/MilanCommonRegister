<?php
  include_once '../admin/admin-auth-check.php';
  include_once '../config/database.php';
  include_once '../objects/user.php';

  if(
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['name'], $_POST['email'], $_POST['role'])
  ) {
    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    if($user->newUser($_POST['name'], $_POST['email'], $_POST['role'])) {
      header('Location: ../admin/create-user.php?success');
    } else {
      header('Location: ../admin/create-user.php?failed');
    }
  } else {
    header('Location: ../admin/create-user.php?failed');
  }
?>
