<?php
  include_once '../objects/user.php';

  $user = new User($db);

  if($user->logout()) {
    header('Location: ../');
  }
?>
