<link rel="stylesheet" href="../assets/css/mainnav.css">

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Milan Portal</a>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../user/logout.php" style="color: #fff;">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky" style="background-color: #eafcf9;">
        <ul class="nav flex-column">
          <?php if($_SESSION['user']['role'] != 'restricted') { ?>
          <li class="nav-item">
              <a class="nav-link" href="../registration/registration.php">
                <span data-feather="home"></span>
                Registration <span class="sr-only">(current)</span>
              </a>
          </li>
          <?php } ?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../registration/event.php">
              <span data-feather="file"></span>
              Event Registration
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="../registration/list.php">
              <span data-feather="shopping-cart"></span>
              List
            </a>
          </li>
          <li class="nav-item" style="position: absolute; top: 85%;">
            <a class="nav-link" href="https://webarchsrm.com" target="_blank">
              <span data-feather="shopping-cart"></span>
              <img src="../webarch_logo.png" alt="" style="max-height: 57px; max-width: 170px;">
            </a>
          </li>
        </ul>
      </div>
    </nav>
