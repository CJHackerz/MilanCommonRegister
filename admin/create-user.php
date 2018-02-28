<?php
  include_once '../admin/admin-auth-check.php';
  include_once '../templates/head.php';
  include_once '../templates/mainnav-admin.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Create a User</h1>
  </div>

  <form class="" action="process-create-user.php" method="post">
    <div class="form-group"  style="font-weight: bold;">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group"  style="font-weight: bold;">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group"  style="font-weight: bold;">
      <label for="role">Role</label>
      <select class="form-control" name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>

<?php
    if(isset($_GET['success'])) {
        if($_GET['success'] == '') {
    ?>
    <script type="text/javascript">
    swal("Mail Sent!", "User Created !", "success");
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
            swal("Oops!", "User not created !", "error");
            </script>
            <?php
        }
    }
    ?>

<?php
  include '../templates/footer.php';
?>
