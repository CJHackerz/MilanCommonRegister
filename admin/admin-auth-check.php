<?php
  if(isset($_SESSION['user'])) {
    if($_SESSION['user']['role'] != 'admin') {
      header('Location: ./index.php');
      die();
    }
  }
?>
