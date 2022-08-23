<?php
    // how to destroy session?
    $server ="localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection to database failed due to" . mysqli_connect_error());
    }
    // echo("Success connecting to database")
    $flag = false;
    $fetched_role = false;
    if(!empty($_POST['user'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $sql = "SELECT roles FROM `users`.`ids` WHERE user = '$user' and pass= '$pass';";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        $fetched_role = true;
        while($row = $result->fetch_assoc()) {
          $role = $row["roles"];
        }
      }
      else{
        $flag = true;
      }
    }
    $con->close();
    if($fetched_role==true){
        session_start();
        $_SESSION["user"] = $user;
        $_SESSION["role"] = $role;
        header('Location: select.php');
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

    <section id="banner">
      <div>
        <div id="login_form_wrap">
          <h2 style="color: rgb(105, 98, 98);">Login</h2>
          <form id="login-form" method = "POST" action="index.php">
            <p>
              <input id="username" name="user" placeholder=" Username" autocomplete="off" required>
            </p>
            <p>
              <input type = "password" id="pass" name="pass" placeholder=" Password" autocomplete="off" required>
            </p>
             <?php
              if($flag==true){
                echo "<h2 style='color: red; font-size: 19px; margin: 0%;'> Wrong ID or Password ! </h2> <br>";
                
            }
              ?>
              <!-- <input type="checkbox" onclick="myFunction()">Show Password -->
               <!-- <script>
                function myFunction() {
                var x = document.getElementById("pass");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script> -->
            <p>
              <input type="submit" id="login" value="Login">
            </p>
           
          </form>
          <div id="create-account-wrap">
            <p>Not registered? <a href="#">CLICK HERE</a>
            <p>
          </div>
          <!--create-account-wrap-->
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