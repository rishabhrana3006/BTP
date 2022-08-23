<?php
    session_start();
    $user = $_SESSION["user"];
    $role = $_SESSION["role"];
    $miss_module = false;
    // Start the session
    if(!empty($_POST['select'])){
        $select = $_POST['select'];
        if($select == "Bus Management"){
            if($role == "student"){
                header('Location: Bus Management\User Portal\Home.php');
            }
            else if($role == "Admin"){
                header('Location: Bus Management\Admin Portal\index.php');
            }
        }
        else if($select == "Dispensary Management"){
            if($role == "student"){
                header('Location: Dispensary Management\User Portal\user side\Home.html');
            }
            else if($role == "Admin"){
                header('Location: Dispensary Management\Doctor Portal\Dispensarymanagement\Home.html');
            }
        }
        else{
            $miss_module = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bus Management</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center" style="margin-left: 30px;">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/lnmiit_logo_2.png " class="img-fluid"
              style="margin-right: 20px;"><span>Lnmiit Services</span></a></h1>
      </div>

    <!-- removed nav bar code -->
  </header><!-- End Header -->

  <main id="main">

    <section id="banner" class ="select">
      <div>
        <div id="login_form_wrap" class ="select">
          <h2 style="color: rgb(105, 98, 98);">Options</h2>
          <br> <br>
          <div>
            <form id="login-form" class ="select" method = "POST" action="select.php">
            <p>
                <img src="assets/img/bus_logo_black.png" class="img-fluid"
                  style="height: 60px;">
                  <br> <br> 
              <input type="submit" id="login" name = "select" value="Bus Management">
            </p>
          </form>
          <form id="login-form" class ="select" method = "POST" action="select.php">
            <p>
                <img src="assets/img/leave_application_black.png" class="img-fluid"
                  style="height: 60px;">
                  <br> <br> 
              <input type="submit" id="login" name = "select" value="Leave Application">
            </p>
          </form>
          <br> <br>
          <form  id="login-form" class ="select" method = "POST" action="select.php">
            <p>
                <img src="assets/img/inventory_management_black.png" class="img-fluid"
                  style="height: 60px;">
                  <br> <br> 
              <input type="submit" id="login" name = "select" value="Dispensary Management">
            </p>
          </form>
           <?php
              if($miss_module==true){
                echo "<br> <h2 style='color: red; font-size: 23px; margin: 0%;'> Module is Missing ! </h2> <br> ";
                
            }
              ?>
          <br>
        </div>
        </div>
        
        <!--login-form-wrap-->
      </div>



      <br><br>





      <br><br>


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