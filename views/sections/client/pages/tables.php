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
        
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Card tables</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Job Profile</th>
                    <th scope="col">Status</th>
                    <th scope="col">Add</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="mb-0 text-sm">Khushboo Chandnani</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      UI/UX Developer
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>Submitted
                      </span>
                    </td>
                   
                    <td>
                      <button class="btn btn-success">Add</button>
                    </td>
                    <td>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="mb-0 text-sm">Nikhil Ghind</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      Software Developer
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>Pending
                      </span>
                    </td>
                   
                    <td>
                      <button class="btn btn-success">Add</button>
                    </td>
                    <td>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                    
                  </tr>
                  
                    
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
      <!-- Dark table -->
     
      <!-- Footer -->
      
    </div>
  <br/>
  <br/>
  <?php
    require_once('../layout/footer.php');
  ?>