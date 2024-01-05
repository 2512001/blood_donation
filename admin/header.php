<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['usernames']) == true)
{
  $redirectUrl = "http://localhost/webproject/login.php";
  header("Location: " . $redirectUrl);
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  .navbar {

    background-color:  #273746;
    padding: 10px 10px;
    color: #FF0404;
   
    
  }
  .navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
  }
  .navbar-brand {
    font-size: 25px;
    font-weight: bold;
  }
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar-right {
    float: none;
  }
 /* #qq:hover {
    background-color: #E5E8E8;
    border-radius: 5px;
  }*/
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous" />

</head>
<body>

<nav class="navbar  navbar-fixed-top"> 
  <div class="container-fluid ">
    <div class="navbar-header">
    <?php if ($active !== 'home') : ?>
      <a href="../home.php" class="btn btn-outline-light me-2">
    <i class="fas fa-arrow-left"></i> Back to Home
      </a>
                <?php endif; ?>

      <a class="navbar-brand" id="qq" href="dashboard.php" style="color:#F51A14;">Blood Bank & Donation Admin Panel</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold;color:white "> <span class="glyphicon glyphicon-user"></span>&nbsp&nbsp
        <?php
        /*session_start();*/
        $conn=mysqli_connect("localhost","root","","bld_dntn") or die("Connection error");
        $username=$_SESSION['usernames'];
        $sql="select * from admin_info where admin_username='$username'";
        $result=mysqli_query($conn,$sql) or die("query failed.");
        $row=mysqli_fetch_assoc($result);
        error_reporting(0);
        echo "Hello ".$row['admin_name'];
       ?><span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#D6EAF8;">
          <li><a href="logout.php" style="color:#D35400 ;">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
