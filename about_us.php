<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    #page-container{
        padding: 40px 20px;
    }
    .FACILITIES{
       /* border: 1px solid green;*/
        width: 100%;
       padding-bottom: 20px;
        margin-bottom: 10px;
    }
    .FACILITIES .facilitiesdetails{
        display: flex;
     /*   border: 1px solid;*/
        justify-content: space-between;
        padding: 20px 10px;
       
   
    }
    /*containt*/
    .FACILITIES .facilitiesdetails .facilitiescontain{
    /*background-color: green;*/
    display: flex;
    padding: 10px;
    }
    /*icon*/
    .FACILITIES .facilitiesdetails .facilitiescontain .icon{
       /* border: 1px solid;*/
        padding: 10px;
        
        
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .icon a{
        color:#dd013e;
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .facilitiestext{
      /*  border: 1px solid;*/
        padding: 10px;
        margin-left: 40px;
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .facilitiestext p span{
        background-color: #ccc;
        padding: 8px; 
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .facilitiestext p span:hover{
        background-color:  #262626;
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .facilitiestext p span a{
       text-decoration: none;
       color: #fff;
       color: #000;
    }
    .FACILITIES .facilitiesdetails .facilitiescontain .facilitiestext p span a:hover{
        color: white;
       
    }
    @media screen and (max-width: 700px){
        .FACILITIES .facilitiesdetails
        {
            display: block;
        }
    }
    .mt-4{
        color:#dd013e;
    }
   
</style>
<body>

<?php 
$active ='about_us';
include('head.php');

?>


<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">About Us</h1>
        <p> <?php
          include 'conn.php';
          $sql=$sql= "select * from pages where page_type='aboutus'";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) {
                echo $row['page_data'];
              }
            }

         ?>
      </p>

    </div>
    <div class="col-lg-6">
        <img class="img-fluid rounded" src="img/blood10.png" style="height:400px" alt="error"  >
    </div>
</div>
</div></div>
<div class="FACILITIES">
    <hr>
    <div class="facilitiesdetails">
    <div class="facilitiescontain">
        <div class="icon">
        <a href="#"><i class="fa fa-droplet fa-3x"></i></a>
        </div>
        <div class="facilitiestext">
            <span><h3>Find Blood</h3></span>
            <p>Find blood banks and blood availability across the nation.
           <br><br>
           <span> <a href="find_blood.php" >Find now</a></span>
            </p>

        </div>
    </div>
    <div class="facilitiescontain">
    <div class="icon">
        <a href="#"><i class="fa fa-user fa-3x"></i></a>
        </div>
        <div class="facilitiestext">
            <span><h3>Donor location</h3></span>
            <p>Locate donors nearby to contact in need them most.
           <br><br>
           <span> <a href="donor_location.php" target="_blank">Find now</a></span>
            </p>
        </div>   
    </div>
    <div class="facilitiescontain">
    <div class="icon">
        <a href="#"><i class="fa fa-circle-plus fa-3x"></i></a>
        </div>
        <div class="facilitiestext">
            <span><h3>Organize blood drive</h3></span>
            <p> Get engaged by organizing a blood drive or blood camp with us.
           <br><br>
           <span> <a href="#" style="text-decoration-line: line-through;">Find now</a></span>
            </p>
        </div>    </div>
    </div>
   
</div>

</div>

<?php include('footer.php')
?>
</body>

</html>
