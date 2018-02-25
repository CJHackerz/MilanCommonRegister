<?php
  include_once '../templates/head.php';
  include_once '../templates/mainnav.php';

  include_once '../config/database.php';
  include_once '../objects/registration.php';

  $database = new Database();
  $db = $database->getConnection();

  $registration = new Registration($db);
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Event/Domain Registration</h1>
  </div>

  <form class="" action="process-update.php" method="post">
    <div class="form-group">
      <label for="milanid">Milan ID</label>
      <input type="text" class="form-control-plaintext" id="milanid" name="milan_id" value="" readonly>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control-plaintext" id="name" name="name" readonly>
    </div>
    <div class="form-group">
      <label for="college">College Name</label>
      <input type="text" class="form-control-plaintext" id="college" name="college" readonly>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="text" class="form-control-plaintext" id="phone" name="phone" readonly>
    </div>
    <div class="form-group">
      <label for="domain">Domain</label>
      <select name="domain" class="form-control" id="domain_select" onchange="setDomain()">

        <?php
          foreach ($registration->domains as $key) {
            echo '<option value="' . $key['value'] . '">' . $key['text'] . '</option>';
          }
        ?>

      </select>
    </div>
    <div class="form-group">
      <label for="event">Event</label>
      <select name="event" class="form-control" id="event_select">
        <!-- <option value="volvo">Volvo</option> -->
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</main>

<?php
  include '../templates/footer.php';
?>

<script type="text/javascript">
<?php
  echo 'var events = ' . json_encode($registration->events) . ';' ;
?>
  function setDomain() {
    var selectBox = document.getElementById("domain_select");
    var eventSelect = document.getElementById("event_select");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;

    eventSelect.options.length = 0;
    i=0;
    jQuery.each(events[selectedValue], function(key, val) {
      eventSelect.options[i] = new Option(val['text'], key);
      i++;
    });
  }

  $( document ).ready(function() {
    setDomain();
  });
</script>
