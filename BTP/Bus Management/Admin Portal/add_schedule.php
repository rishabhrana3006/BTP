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
$insert = false;
$error_flag = false;
// get set variables\
$page = trim($_POST['pg']);
$sno = null;
$time = null;
$start = null;
$dest = null;
$busno = null;
$seats = null;
if(isset($_POST['time'])){
    $sno = $_POST['sno'];
    $time = $_POST['time'];
    $start = $_POST['start'];
    $dest = $_POST['dest'];
    $busno = $_POST['busno'];
    $seats = $_POST['seats'];
    if(strlen($time) > 8){
      $insert = false;
      $error_flag = true;
    }
    else{
        $sql = "INSERT INTO `btp`.`$page` (`S.No`, `Time`, `From_`, `To_`, `Bus.No`, `Seats`) VALUES ('$sno', '$time', '$start', '$dest', '$busno', '$seats');";
      $result = mysqli_query($conn, $sql);
      $insert = $result;
    }
   

    
}

// // // getting balance in bal array bal[0] contains our answer
// // $balquery = "SELECT points FROM `btp`.`student_points` WHERE roll_no = '$user';";
// // $balquery_run = mysqli_query($conn,$balquery);
// // $bal = mysqli_fetch_array($balquery_run);

// // // getting seat number in seat array seat[0] contains our answer;
// // $seatquery = "SELECT seats FROM `btp`.`$page` WHERE `S.No`= '$sn';";
// // $seatquery_run = mysqli_query($conn,$seatquery);
// // $seat = mysqli_fetch_array($seatquery_run);


// // if($userbal == null || $userbal < 50){
// //   $notenoughbal = true;
// // }
// // else if($seats > 0){
// //   $booking = true;
// }

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
             <img src="assets/img/bus.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 32px;">
       </div> <a href="Bus.php" style="margin-left: 3px;">Bus</a></li>
          <li><div class="logo-image">
             <img src="assets/img/driver.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 45px;">
       </div> <a href="Driver.php" style="margin-left: 10px;">Driver</a></li>
          <li><div class="logo-image">
             <img src="assets/img/schedule.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 50px;">
       </div> <a href="view_schedule.php" style="margin-left: 10px;">Schedule</a></li>
           <li><div class="logo-image">
             <img src="assets/img/view%20requests.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 52px;">
       </div> <a href="request.php" style="margin-left: -10px;">View Request</a></li>
        <li><div class="logo-image">
             <img src="assets/img/wallet.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 52px;">
       </div> <a href="Wallet.php" style="margin-left: 10px;">Wallet</a></li>
         </ul>
           
          
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->
 
 
    </div>
  </header><!-- End Header -->

  <main id="main">

    
    <!-- ======= Contact Section ======= -->
   <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <form action="add_schedule.php" method="post" role="form" style="width: 1300px;">
             <br>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="sno"  placeholder="Enter S.No" required>
                </div>
            <br>
                <div class="form-group mt-3">
                  <input type='hidden' name="pg" value=" <?php echo $page; ?> " />
                  <input type="text" class="form-control" name="time"  placeholder="Enter Time" required>
              </div>
            
              <br>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="start" placeholder="Enter Starting Position" required>
              </div>
              <br>
              <div class="form-group mt-3">
                  <input type="text" class="form-control" name="dest"  placeholder="Enter Destination" required>
                </div>
               
              <br>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="busno"  placeholder="Enter Bus No." required>
                </div>
              <br>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="seats"  placeholder="Enter Seat Capacity" required>
                </div>
            <br>
               
              <br>
                <?php
              if($insert==true){
                echo "<h2 style='color: #006400; font-size: 18px; margin: 0%;'> Schedule Added Successfully ! </h2>";
                
            }
            if($error_flag == true){
                echo "<h2 style='color: #8B0000; font-size: 18px; margin: 0%;'> Invalid Time ! $time is not a valid time ! </h2>";
            }
              ?>
               
               
               
              <br><br>
              
              <div class="text-center"><button type="submit" style="margin-left: 0px; border: 2px solid grey; padding: 4px 4px 4px; color: #4fa6d5; background:#fff">Add Schedule</button></div>
            
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    
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