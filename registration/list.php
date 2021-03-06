<?php
  include_once '../user/session-check.php';

  include_once '../templates/head.php';

  if($_SESSION['user']['role'] == 'admin') {
    include_once '../templates/mainnav-admin.php';
  } else {
    include_once '../templates/mainnav.php';
  }

  include_once '../config/database.php';
  include_once '../objects/registration.php';

  $database = new Database();
  $db = $database->getConnection();

  $registration = new Registration($db);
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Total Registrations</h1>
  </div>

  <table id="myTable0" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Milan ID</th>
        <th scope="col">Name</th>
        <th scope="col">College</th>
        <th scope="col">Phone</th>
        <th scope="col">Payment</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $registration->selectAll();
        $i=1;
        if($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $milan_id = $row['milan_id'];
            $name     = $row['name'];
            $college  = $row['college_name'];
            $phone    = $row['phone'];
            $payment  = $row['payment'];
            echo "
              <tr>
                <td>$i</td>
                <td>$milan_id</td>
                <td><a href='../registration/event.php?id=$milan_id'>$name</a></td>
                <td>$college</td>
                <td>$phone</td>
                <td>$payment</td>
              </tr>
            ";
            $i++;
          }
        }
      ?>
    </tbody>
  </table>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Rs 500 Registrations</h1>
  </div>

  <table id="myTable1" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Milan ID</th>
        <th scope="col">Name</th>
        <th scope="col">College</th>
        <th scope="col">Phone</th>
        <th scope="col">Payment</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $registration->selectByPayment(500);
        $i=1;
        if($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $milan_id = $row['milan_id'];
            $name     = $row['name'];
            $college  = $row['college_name'];
            $phone    = $row['phone'];
            $payment  = $row['payment'];
            echo "
              <tr>
                <td>$i</td>
                <td>$milan_id</td>
                <td><a href='../registration/event.php?id=$milan_id'>$name</a></td>
                <td>$college</td>
                <td>$phone</td>
                <td>$payment</td>
              </tr>
            ";
            $i++;
          }
        }
      ?>
    </tbody>
  </table>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Rs 400 Registrations</h1>
  </div>

  <table id="myTable2" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Milan ID</th>
        <th scope="col">Name</th>
        <th scope="col">College</th>
        <th scope="col">Phone</th>
        <th scope="col">Payment</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $registration->selectByPayment(400);
        $i=1;
        if($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $milan_id = $row['milan_id'];
            $name     = $row['name'];
            $college  = $row['college_name'];
            $phone    = $row['phone'];
            $payment  = $row['payment'];
            echo "
              <tr>
                <td>$i</td>
                <td>$milan_id</td>
                <td><a href='../registration/event.php?id=$milan_id'>$name</a></td>
                <td>$college</td>
                <td>$phone</td>
                <td>$payment</td>
              </tr>
            ";
            $i++;
          }
        }
      ?>
    </tbody>
  </table>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3" style="border-bottom: 1px solid #a0c4ff;">
    <h1 class="h2">Rs 200 Registrations</h1>
  </div>

  <table id="myTable3" class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Milan ID</th>
        <th scope="col">Name</th>
        <th scope="col">College</th>
        <th scope="col">Phone</th>
        <th scope="col">Payment</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $registration->selectByPayment(200);
        $i=1;
        if($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $milan_id = $row['milan_id'];
            $name     = $row['name'];
            $college  = $row['college_name'];
            $phone    = $row['phone'];
            $payment  = $row['payment'];
            echo "
              <tr>
                <td>$i</td>
                <td>$milan_id</td>
                <td><a href='../registration/event.php?id=$milan_id'>$name</a></td>
                <td>$college</td>
                <td>$phone</td>
                <td>$payment</td>
              </tr>
            ";
            $i++;
          }
        }
      ?>
    </tbody>
  </table>
</main>

<?php
  include '../templates/footer.php';
?>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable0').DataTable();
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
  });
</script>
