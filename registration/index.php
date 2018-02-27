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
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Registration</h1>
  </div>

  <form class="" action="process-registration.php" method="post">
    <div class="form-group">
      <label for="milanid">Milan ID</label>
      <input type="text" class="form-control-plaintext" id="milanid" name="milan_id" value="<?php echo 'M' . mt_rand(100000, 999999); ?>" readonly>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="college">College Name</label>
      <input type="text" class="form-control" id="college" name="college">
    </div>
    <div class="form-group">
      <label for="name">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>

<?php
  include '../templates/footer.php';
?>
