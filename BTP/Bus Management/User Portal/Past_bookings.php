<?php
  session_start();
  $a = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bus Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/bus%20logo%201.png" class="img-fluid"
              style="margin-right: 20px;"><span>Bus Booking</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <ul>
            <li>
              <div class="logo-image">
                <img src="assets/img/home%20icon.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 25px;">
              </div> <a class="active " href="index.php" style="margin-left: -10px;">Home</a>
            </li>&nbsp;
            <li>
              <div class="logo-image">
                <img src="assets/img/booking.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 32px;">
              </div> <a href="Book_bus.php" style="margin-left: -10px;">Book Bus</a>
            </li>
            <li>
              <div class="logo-image">
                <img src="assets/img/past%20booking.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 45px;">
              </div> <a href="Past_bookings.php" style="margin-left: -10px;">Past Booking</a>
            </li>
            <li>
              <div class="logo-image">
                <img src="assets/img/schedule.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 50px;">
              </div> <a href="view_schedule.php" style="margin-left: -10px;">View Schedule</a>
            </li>
            <li>
              <div class="logo-image">
                <img src="assets/img/send%20request.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 52px;">
              </div> <a href="Request.php" style="margin-left: -10px;">Send Request</a>
            </li>
            <li>
              <div class="logo-image">
                <img src="assets/img/logout.png" class="img-fluid"
                  style="width: 30px;height: 30px; margin-top: 20px; margin-left: 30px;">
              </div> <a href="../../index.php" style="margin-left: -10px;">Log out</a>
            </li>
          </ul>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Past Bookings</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Past Booking</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>



        </div>

        <div class="row">
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>



        </div>

        <div class="row">
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>

          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>
          <div class="col-md-7 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Booking Id - 1</a></h4>
              <p class="title"><a href="">Booking Time - 9:30 am</a></p>
              <p class="description">Departure Time: 2pm</p>
              <p class="description">Starting Point : Lnmiit</p>
              <p class="description">Destination : Raja Park</p>
            </div>
          </div>
           <?php
  echo "<h2 style='color: red; font-size: 19px; margin: 0%;'> $a </h2> <br> ";
?>



        </div>

      </div>
    </section>
  </main>

















































  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>