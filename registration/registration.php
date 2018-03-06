<?php
  include_once '../user/session-check.php';

  if($_SESSION['user']['role'] =='restricted') {
    header('Location: ../registration/');
  }

  include_once '../templates/head.php';
  if($_SESSION['user']['role'] == 'admin') {
    include_once '../templates/mainnav-admin.php';
  } else {
    include_once '../templates/mainnav.php';
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Registration</h1>
  </div>
  <div class="row justify-content-center">
    <div class="card border-primary col-md-5 col-xs-12">
      <div class="card-body">
        <form class="" action="process-registration.php" method="post">
          <div class="form-group" style="font-weight: bold;">
            <label for="milanid">Milan ID</label>
            <input type="text" class="form-control" id="milanid" name="milan_id" value="<?php echo 'M' . mt_rand(100000, 999999); ?>" readonly style="font-weight: bold; font-size:1.4em;">
          </div>
          <div class="form-group" style="font-weight: bold;">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group" style="font-weight: bold;">
            <label for="college">College Name</label>
            <input type="text" class="form-control" id="college" name="college" required>
          </div>
          <div class="form-group" style="font-weight: bold;">
            <label for="name">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="form-group" style="font-weight: bold;">
            <label for="payment">Payment</label>
            <select name="payment" class="form-control" id="payment">
              <option value=500>500</option>
              <option value=400>400</option>
              <option value=200>200</option>
            </select>
          </div>
          <button type="submit" class="btn btn-outline-success btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <br><br><br>
</main>

<?php
    if(isset($_GET['success'])) {
        if($_GET['success'] == '') {
    ?>
    <script type="text/javascript">
    swal("Nice!", "Successfully Registered !", "success");
    </script>
    <?php
        }
    }
    else if(isset($_GET['failed']))
    {
        if($_GET['failed'] == '')
        {
            ?>
            <script type="text/javascript">
            swal("Failed to register!", "Details may match another registration", "error");
            </script>
            <?php
        }
    }
    ?>

<?php
  include '../templates/footer.php';
?>
