<?php 
require_once('../layout/header.php');
// require_once('../../../../classes/Service.php');
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
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist" style="padding: 0 5%;">
              <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
              </li>
          </ul>
        </div>
        <form role="form" method="POST" action="<?php echo BASEURL ?>helper/router.php">
            <div class="card shadow">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            <div class="col-xl-12 order-xl-1">
                                <div class="card bg-secondary shadow">
                                    <div class="card-header bg-white border-0">
                                        <div class="row align-items-center">
                                            <div class="col-">
                                                <h3 class="mb-0">Add Profile</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                            <h6 class="heading-small text-muted mb-4">Profile Details</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Job Name</label>



                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="job_profile_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Job Description</label>
                                                            <textarea></textarea>


                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="job_profile_description">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Job Criteria</label>
                                                            <textarea></textarea>


                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="job_profile_criteria">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Bond</label>



                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Bond" name="job_profile_bond">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                            <div class="col-xl-12 order-xl-1">
                                <div class="card bg-secondary shadow">
                                    <div class="card-header bg-white border-0">
                                        <div class="row align-items-center">
                                            <div class="col-">
                                                <h3 class="mb-0">Add Package Details For Profile</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <h6 class="heading-small text-muted mb-4">Package Details</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Package CTC</label>



                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter CTC" name="package_ctc">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Package LPA</label>



                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter LPA" name="package_lpa">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Extra Benefits</label>
                                                            <textarea></textarea>


                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="package_benefits">
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Services Offered</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                            <div class="col-xl-12 order-xl-1">
                                <div class="card bg-secondary shadow">
                                    <div class="card-header bg-white border-0">
                                        <div class="row align-items-center">
                                            <div class="col-">
                                                <h3 class="mb-0">Add Registration Details</h3>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                            <h6 class="heading-small text-muted mb-4">Registration Date Details</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Registration Start Date</label>



                                                            <input type="Date" id="input-username" class="form-control form-control-alternative" placeholder="Registration Start Date" name="job_profile_registration_start_date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Registration End Date</label>



                                                            <input type="date" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="job_profile_registration_end_date">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Process Date</label>
                                                            <input type="date" id="input-username" class="form-control form-control-alternative" placeholder="Enter Job Profile" name="job_profile_process_start_date">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" name="addProfile" type="submit">Submit</button>


                                                </div>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <br />
    <?php
    require_once('../layout/footer.php');
    ?>
</body>
