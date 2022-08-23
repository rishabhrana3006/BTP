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
$searchErr = '';
$student_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $sql = "select * from student_points where roll_no like '%$search%'";
        $result = mysqli_query($conn, $sql);
        $student_details = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($student_points _details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
<html>
<head>
<title>Wallet</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>
    <div class="container">
    <h3><u>PHP MySQL search database and display results</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search Student Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            
            <th>Roll No</th>
            <th>Points</th>
            
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$student_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($student_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        
                        <td><?php echo $value['roll_no'];?></td>
                        <td><?php echo $value['points'];?></td>
                       
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>