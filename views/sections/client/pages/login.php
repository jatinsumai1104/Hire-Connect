<?php
  require_once('../layout/header.php');
?>
<!-- Header -->
<body class="bg-default">
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">HireConnect</h1>
              <p class="text-lead text-light"
                >Welcome to HireConnect and recruit millions.</p
              >
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg
          x="0"
          y="0"
          viewBox="0 0 2560 100"
          preserveAspectRatio="none"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
        >
          <polygon
            class="fill-default"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Login In with credentials</small>
              </div>
              <form role="form" method="POST" action="<?php echo BASEURL ?>helper/router.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="ni ni-email-83"></i
                      ></span>
                    </div>
                    <input
                      class="form-control"
                      placeholder="Email"
                      type="email" name="email"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="ni ni-lock-circle-open"></i
                      ></span>
                    </div>
                    <input
                      class="form-control"
                      placeholder="Password"
                      type="password" name="password"
                    />
                  </div>
                </div>
                <div
                  class="custom-control custom-control-alternative custom-checkbox"
                >
                  <input
                    class="custom-control-input"
                    id=" customCheckLogin"
                    type="checkbox"
                  />
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4"
                   name="login_process">Sign in</button
                  >
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"
                ><small>Create new account</small></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    
  </div>
