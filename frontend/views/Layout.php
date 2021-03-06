<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TheGioiDiDong</title>
  <style>
    .page-container {}

    .navbar {
      width: 100% !important;
      left: 0 !important;

    }

    .banner {
      height: auto;
      width: 100vw;
      /* background-color: aqua; */
    }

    .banner-fill {
      height: 60px;
      width: 100%;
      background-color: black;
    }

    .logo {
      height: 100%;
      width: 15%;
      line-height: 60px;
    }

    .navigation {
      margin-left: 50px;
      height: 60px;
      display: flex;
      position: relative;
    }

    .navbar-search {
      margin-top: 10px;
      align-self: center;
      width: 30vw;
      height: 42px;
      border-radius: 20px;
      border: .5px solid orange;
      padding-left: 1rem;
      font-size: 16px;
    }

    .search-btn {
      width: 60px;
      border: none;
      cursor: pointer;
      background: transparent;
      position: absolute;
      top: 30%;
      right: 0;
      font-size: 16px;
      color: orange;
    }

    .navbar-link {
      margin: 0 30px;
      line-height: 60px;
      font-size: 16px;
    }

    .navbar-link>a {
      margin: 0 20px;
    }

    .main__footer {
      height: 200px;
      width: 100px;
      background-color: red;
    }

    .footer {
      margin-top: 30px;
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="stylemain.css"> -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- core:css -->
  <link rel="stylesheet" href="../assets/backend/vendors/core/core.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/backend/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="../assets/backend/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/backend/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/backend/images/azz.jpg" />
  <script type="text/javascript" src="../assets/backend/ckeditor/ckeditor.js"></script>
</head>

<body>
  <div class="page-container">
    <nav class="navbar">
      <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
      </a>
      <div class="navbar-content">
        <div class="logo">
          <a href="index.php?controller=demo"><img src="../assets/backend/images/logo.png" width="100%" alt="logo"></a>
        </div>
        <div class="navigation">
          <form method="post" action="index.php?controller=demo&action=search">
            <input type="text" name="tenSP" aria-label="Search" placeholder="Search..." class="navbar-search" id="search">

            <button type="submit" class="search-btn"><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div class="navbar-link">
          <a href="#">S???N PH???M</a>
          <a href="#">ABOUT US</a>
        </div>
        <div style="float: right; margin-bottom: 5px; line-height:60px; margin-left:160px">
          <a href="index.php?controller=demo&action=showCart" class="btn btn-primary">
            <h6>Gi??? h??ng&nbsp; <i class="bi bi-cart"></i></h6>
          </a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown nav-profile">
            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="../assets/backend/images/azz.jpg" alt="profile">
            </a>
            <div class="dropdown-menu" aria-labelledby="profileDropdown">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="../assets/backend/images/azz.jpg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0"><?php echo $_SESSION['customer'] ?></p>
                </div>

              </div>
              <div class="dropdown-body">
                <ul class="profile-nav p-0 pt-3">
                  <li class="nav-item">
                    <a href="index.php?controller=login&action=logout" class="nav-link">
                      <i data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
  </div>
  <!-- partial -->
  <div class="page-content">
    <?php
    echo $this->view;
    ?>
  </div>
  <footer class="text-center text-lg-start bg-light text-muted" style="margin-top:100px;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #ffce00; border-radius:10px 10px 0 0">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Li??n h??? v???i ch??ng t??i: </span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="bi bi-phone-fill"></i>TheGioiDiDong
            </h6>
            <p>
              C???a h??ng ??i???n tho???i v?? m??y t??nh h??ng ?????u Vi???t Nam
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              S???n ph???m
            </h6>
            <p>
              <a href="#!" class="text-reset">??i???n tho???i</a>
            </p>
            <p>
              <a href="#!" class="text-reset">M??y t??nh</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Tablet</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laptop</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Li??n k???t
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Li??n h???
            </h6>
            <p><i class="bi bi-house-door-fill me-3"></i> H?? N???i, Vi???t Nam</p>
            <p>
              <i class="bi bi-envelope-fill me-3"></i>
              info@example.com
            </p>
            <p><i class="bi bi-telephone-fill me-3"></i> + 01 234 567 88</p>
            <p><i class="bi bi-fingerprint me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      ?? 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- partial:partials/_footer.html -->
  <!-- partial -->

  <!-- </div> -->
  <!-- </div> -->

  <!-- core:js -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="../assets/backend/vendors/core/core.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/backend/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../assets/backend/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/backend/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="../assets/backend/vendors/feather-icons/feather.min.js"></script>
  <script src="../assets/backend/js/template.js"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="../assets/backend/js/dashboard.js"></script>
  <script src="../assets/backend/js/datepicker.js"></script>
  <!-- end custom js for this page -->
</body>

</html>