<?php
  include_once '../user/session-check.php';

  include_once '../templates/head.php';
  if($_SESSION['user']['role'] == 'admin') {
    include_once '../templates/mainnav-admin.php';
  } else {
    include_once '../templates/mainnav.php';
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Dashboard</h1>
  </div>
    <h3>You are a user of type : <?php echo $_SESSION['user']['role']; ?></h3>
    <br>
    <h4>You can perform the following actions</h4>
      <?php
        if($_SESSION['user']['role'] == 'admin') {
          echo '<a class="btn btn-primary" href="../admin/create-user.php">Create a new User</a><br> <br>';
        }
        if($_SESSION['user']['role'] == 'user' || $_SESSION['user']['role'] == 'admin') {
          echo '<a class="btn btn-primary" href="../registration/registration.php">Global Registration</a><br> <br>';
        }

        if($_SESSION['user']['role'] == 'restricted' || $_SESSION['user']['role'] == 'admin') {
          echo '<a class="btn btn-primary" href="../registration/list.php">Event Registration</a><br> <br>';
        }
      ?>

</main>

<?php
  include '../templates/footer.php';
?>
