<?php
session_start();
$user = $_SESSION["user"];
// calender code
$page = 'weekdays';
if(isset($_POST['page'])){
    $page = $_POST['page'];
}
$date = new DateTime();
if(isset($_POST['date'])){
    $date = DateTime::createFromFormat('Y-m-d', $_POST['date']);
}
$day = date_format($date,"l");
$day_converter = array("Monday"=> "weekdays","Tuesday"=> "weekdays","Wednesday"=> "weekdays","Thursday"=> "weekdays","Friday"=> "weekdays","Saturday"=> "weekends","Sunday"=> "weekends");
$day_type = $day;
$min = new DateTime();
$max = new DateTime();
$max->modify("+6 days");
//
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "btp";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `$day_type`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
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

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Book Bus</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Book Bus</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
<br><br>
<form style="margin-left: 13em;" name="myform" action="Book_bus.php" method="post">
  <label for="sel1">Select Date:</label>
<input type="date" value="<?php echo date("Y-m-d");?>" min=<?=$min->format("Y-m-d")?> max=<?=$max->format("Y-m-d")?> name="date">
<button type="submit" style="margin-left: 20px;background: #f44336;color: #fff;padding: 4px 20px;border-radius: 8px;">Select</button>
</form>

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">

              <article class="entry" style="width: 1200px;">
              <div class="entry-content">
                 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Time</th>
                                            <th colspan="2">Bus of LNMIIT</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Bus No.</th>
                                            <th>Seats</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                       <?php
                                    if($num> 0){
                                      while($row = mysqli_fetch_assoc($result)){
                                      
                                        ?><tr> 
                                          <td>
                                          <?php echo $row['S.No']; 
                                          ?>
                                          </td>
                                          <td>
                                          <?php echo $row['Time']; 
                                          ?>
                                          </td>
                                          <td>
                                          <?php echo $row['From_']; 
                                          ?>
                                          </td>
                                          <td>
                                          <?php echo $row['To_']; 
                                          ?>
                                          </td>
                                          <td>
                                          <?php echo $row['Bus.No']; 
                                          ?>
                                          </td>
                                          <td>
                                          <?php echo $row['Seats']; 
                                          ?>
                                          </td>
                                          <td>
                                           <form action="booker.php" method="post">
                                            <input type='hidden' name="sn" value=" <?php echo $row['S.No']; ?> " />
                                            <input type='hidden' name="pg" value=" <?php echo $day; ?> " />
                                            <input type='hidden' name="user" value=" <?php echo $user; ?> " />
                                            <button type="submit" style="margin-left: 20px;background: #f44336;color: #fff;padding: 4px 20px;">Book</button>
                                            </form>
                                             <!-- <a href = "booker.php?sn='$row[S.No]'&page=$page&user=$user" type="submit" style="margin-left: 70px;background: #f44336;color: #fff;padding: 10px 24px;">Book</button> -->
                                          </td>
                                           <?php
                                          
                                      }
                                    } 
                                    ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>8.00 AM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>1</td>
                                            <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10.00 AM</td>
                                            <td>LNMIIT</td>
                                            <td>Ajmeri Gate</td>
                                            <td>1</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>11.00 AM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>1</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>12.00 Noon</td>
                                            <td>LNMIIT</td>
                                            <td>Ajmeri Gate</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1.30 PM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>3.05 PM</td>
                                            <td>LNMIIT</td>
                                            <td>Ajmeri Gate</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>5.00 PM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>6.15 PM</td>
                                            <td>LNMIIT</td>
                                            <td>Ajmeri Gate</td>
                                            <td>1</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>7.05 PM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>1</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>8.05 PM</td>
                                            <td>LNMIIT</td>
                                            <td>Ajmeri Gate</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>9.30 PM</td>
                                            <td>Ajmeri Gate</td>
                                            <td>LNMIIT</td>
                                            <td>2</td>
                                             <td><button type="submit" style="margin-left: 70px;">Click</button></td>
                                        </tr> -->
                                    </tbody>
                                        </table>
                
              </div>

            </article><!-- End blog entry -->
            
<br>
               
               
              <br><br>
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