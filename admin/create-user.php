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
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="role">Role</label>
      <select class="form-control" name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>

<?php
  include '../templates/footer.php';
?>
