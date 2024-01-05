<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.table-responsive{

  width: 82%;
  float: right;
  padding-top:150px;
  padding-right: 10px;
  text-align: center;
}
#sidebar{
  position:relative;
  margin-top:-20px;
}
#content{position:relative;
  margin-left:210px
}
@media screen and (max-width: 600px) 
 #content {
    position:relative;margin-left:auto;margin-right:auto;
  }

  #he{
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      padding: 3px 7px;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      align:center
  }
</style>
</head>
<body style="color:black">
<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php $active="list"; include 'sidebar.php'; ?>

</div>
<?php

  if (isset($_SESSION['usernames'])== true) {
  ?>

<div class="table-responsive">
    <?php
   $conn=mysqli_connect("localhost","root","","bld_dntn") or die("Connection error");    
    // Define the number of records per page
    $limit = 10; // You can adjust this value as needed
    
    $sql1 = "SELECT COUNT(*) as total FROM donors";
    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
    
    $row1 = mysqli_fetch_assoc($result1);
    $total_records = $row1['total'];
    
    $total_page = ceil($total_records / $limit);
    
    // Ensure that the 'page' variable is set
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    // Ensure that 'page' is within a valid range
    if ($page < 1) {
        $page = 1;
    } elseif ($page > $total_page) {
        $page = $total_page;
    }
    
    $offset = ($page - 1) * $limit;
    
    $sql2 = "SELECT * FROM donors LIMIT {$offset}, {$limit}";
    $result2 = mysqli_query($conn, $sql2) or die("Query Failed.");
    
    if (mysqli_num_rows($result2) > 0) {
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Full Name</th>';
        echo '<th>Blood Group</th>';
        echo '<th>Number</th>';
        echo '<th>Email</th>';
        echo '<th>Date of Birth</th>';
        echo '<th>Gender</th>';
        echo '<th>Address</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
    
        while ($row = mysqli_fetch_assoc($result2)) {
            echo '<tr>';
            echo '<td>' . $row['fullname'] . '</td>';
            echo '<td>' . $row['bloodgroup'] . '</td>';
            echo '<td>' . $row['mobile'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['dob'] . '</td>';
            echo '<td>' . $row['sex'] . '</td>';
            echo '<td>' . $row['town'] . '</td>';
            echo '</tr>';
        }
    
        echo '</tbody>';
        echo '</table>';
    
        // Pagination
        echo '<ul class="pagination admin-pagination">';
        if ($page > 1) {
            echo '<li><a href="donor_list.php?page='.($page - 1).'">Prev</a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $page) {
                $active = "active";
            } else {
                $active = "";
            }
            echo '<li class="'.$active.'"><a href="donor_list.php?page='.$i.'">'.$i.'</a></li>';
        }
        if ($total_page > $page) {
            echo '<li><a href="donor_list.php?page='.($page + 1).'">Next</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'No records found.';
    }
    ?>
</div>



<?php }
   else {
       echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
       ?>
       <form method="post" name="" action="login.php" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-8 col-sm-offset-4" style="float:left">

             <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
           </div>
         </div>
       </form>
   <?php }

    ?>
</body>
</html>
