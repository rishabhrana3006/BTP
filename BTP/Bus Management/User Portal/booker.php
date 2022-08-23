<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "btp";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$booking = false;
$notenoughbal = false;
$notenoughseats = false;
// get set variables
$sn = trim($_POST['sn']);
$page = trim($_POST['pg']);
$user = trim($_POST['user']);

// getting balance in bal array bal[0] contains our answer
$balquery = "SELECT points FROM `btp`.`student_points` WHERE roll_no = '$user';";
$balquery_run = mysqli_query($conn,$balquery);
$bal = mysqli_fetch_array($balquery_run);

// getting seat number in seat array seat[0] contains our answer;
$seatquery = "SELECT seats FROM `btp`.`$page` WHERE `S.No`= '$sn';";
$seatquery_run = mysqli_query($conn,$seatquery);
$seat = mysqli_fetch_array($seatquery_run);


if($bal[0] == null || $bal[0] < 50){
  $notenoughbal = true;
}
else if($seat[0] < 1){
  $notenoughseats = true;
}
else{
  // deduct money
  $sql1 = "UPDATE `student_points` SET points = $bal[0]-50 WHERE roll_no = '$user';";
  $res1 = mysqli_query($conn,$sql1);

  // deduct seats
  $sql2 = "UPDATE `btp`.`$page` SET Seats = $seat[0]-1 WHERE `S.No` = $sn;";
  $res2 = mysqli_query($conn,$sql2);

  // add booking
  $sql3 = "INSERT INTO `btp`.`bookings` (`page`, `S_No`, `User`) VALUES ('$page', '$sn', '$user');";
  $res3 = mysqli_query($conn,$sql3);

  // check if all the queries were executed sucessfully
  $booking = ($res1 && $res2 && $res3);
}

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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/bus%20logo%201.png" class="img-fluid" style="margin-right: 20px;"><span>Bus Booking</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
           <ul>
           <li><div class="logo-image">
             <img src="assets/img/home%20icon.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 25px;">
       </div> <a class="active " href="index.php" style="margin-left: -10px;">Home</a></li>&nbsp;
           <li><div class="logo-image">
             <img src="assets/img/booking.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 32px;">
       </div> <a href="Book_bus.php" style="margin-left: -10px;">Book Bus</a></li>
          <li><div class="logo-image">
             <img src="assets/img/past%20booking.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 45px;">
       </div> <a href="Past_bookings.php" style="margin-left: -10px;">Past Booking</a></li>
          <li><div class="logo-image">
             <img src="assets/img/schedule.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 50px;">
       </div> <a href="view_schedule.php" style="margin-left: -10px;">View Schedule</a></li>
           <li><div class="logo-image">
             <img src="assets/img/send%20request.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 52px;">
       </div> <a href="Request.php" style="margin-left: -10px;">Send Request</a></li>
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
    <?php
    if($booking){
      echo "<h2 style='margin-left: 4em; margin-top: 6em; color: #006400; font-size: 20px;'> Booking Done Successfully ! </h2>";
      
      
    }
    else{
      echo "<h2 style='margin-left: 4em; margin-top: 6em; color: #8B0000; font-size: 20px;'> Booking Failed ! </h2>";
      if($notenoughbal){
        echo "<h2 style='margin-left: 4em; margin-top: 1em; color: #8B0000; font-size: 20px;'> You don't have enough balance !</h2>";
      }
      if($notenoughseats){
        echo "<h2 style='margin-left: 4em; margin-top: 1em;color: #8B0000; font-size: 20px;'> Bus is already fully booked !</h2>";
      }
    }
    
    ?>
    
  </main><!-- End #main -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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