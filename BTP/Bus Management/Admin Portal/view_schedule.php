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
$page = 'weekdays';
if(isset($_POST['page'])){
    $page = $_POST['page'];
}

$now_page = $page; 
$sql = "SELECT * FROM `$page`";
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
  <style>
    
    </style>
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
       </div> <a href="Driver.php" style="margin-left: 10px;">Drivers</a></li>
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
    

    <!-- ======= Blog Section ======= -->
    
    <br><br>
     <form style="margin-left: 120px;" name="myform" action="" method="post">
    <select style="width: 1000px;margin-left: 350px;" name="page">
        <option value="weekdays"<?php $page = "weekdays"?>>Weekdays</option>
        <option value="weekends"<?php $page = "weekends"?>>Weekends</option>
    </select>
    <button type="submit" style="margin-left: 20px;background: #1e4356;color: #fff;padding: 4px 20px;border-radius: 8px;">Select</button>
</form>
        
                
      <br>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry" style="width: 1300px;">
              <div class="entry-content">
                 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Time</th>
                                            <th colspan="2">Bus of LNMIIT</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Bus No.</th>
                                          
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
                                        
                                        </tr>
                                        <?php
                                          
                                      }
                                    } 
                                    ?>
                                      
                                    </tbody>
                                       
                                        </table>
                
              </div>

            </article><!-- End blog entry -->
            <form action="add_schedule.php" method="post">
                                            <input type='hidden' name="pg" value=" <?php echo $now_page; ?> " />
                                            <button class="text-center" type="submit" style="margin-left: 560px; border: 2px solid grey; padding: 4px 4px 4px; color: #4fa6d5; background:#fff">Update Schedule</button>
                                            </form>
            
             
             <br><br>

           

            
          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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

