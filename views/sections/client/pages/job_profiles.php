<?php 
require_once('../layout/header.php');
?>

<body class="">
  <?php
  include_once("../layout/sidebar.php");
 ?>
  <div class="main-content">
    <?php
      require_once('../layout/navigation.php');
    ?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6" style="margin-bottom:20px;">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="card-title text-uppercase text-muted mb-0"
                        >Media.Net</h5
                      >
                      <span class="h1 font-weight-bold "
                        >Software Developer</span
                      >
                    </div>
                    <div class="col-auto">
                      <div
                        class="icon icon-shape bg-danger text-white rounded-circle shadow"
                      >
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <a class="btn btn-primary" href="view_profile.php">View Profile</a>
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <br />
  <?php
    require_once('../layout/footer.php');
  ?></body
>
