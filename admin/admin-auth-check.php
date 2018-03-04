<?php
session_start();

  if(isset($_SESSION['user'])) {
    if($_SESSION['user']['role'] != 'admin') {
      header('Location: ../index.php');
      die();
    }
  } else {
    header('Location: ../registration/');
    die();
  }
?>
