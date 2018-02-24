<?php
  include_once '../config/database.php';
  include_once '../objects/user.php';

  if(
    $_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['name']) &&
    isset($_POST['password'])
  ) {

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    if($user->login($_POST['name'], $_POST['password'])) {
      header('Location: ./');
    }
  } else {
    header('Location: ./login.php');
  }
?>
