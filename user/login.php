<?php
  include_once '../templates/head.php';
?>

<link rel="stylesheet" href="../assets/css/login.css">

<main role="main" class="col-md-12 ml-sm-auto col-lg-12" style="background-color: #222;">
  <div class="text-center">
    <form class="form-signin" method="post" action="process-login.php">
      <img class="mb-4" src="http://cr.srmmilan.in/images/milan-logo.png" alt="" width="256">
      <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Please log in</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>
  </div>
</main>
<?php
    if(isset($_GET['invalid'])) {
        if($_GET['invalid'] == '') {
    ?>
    <script type="text/javascript">
    swal("Oops!", "Email or Password invalid !", "error");
    </script>
    <?php
        } else {

        }
    }
    ?>
<?php
  include_once '../templates/footer.php';
?>
