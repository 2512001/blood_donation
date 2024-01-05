<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  *{
    margin: 0;
    padding: 0;
  }
  .jumbotron{
    padding: 60px 30px;
    margin-top: 10px;
    background-image: url('img/blood15.jpg');
    text-align: center;
    color: #ffece6;
    line-height: 50px;
  }
  .jumbotron h1{
    font-weight: 600;
  }
  .jumbotron .lead{
    font-weight:400 ;
    display: inline;
    padding: 24px;
  }

    #carouselExampleCaptions{
        background-color: transparent;
        height: 300px;
        border:  ;
       
    }
    .carousel-inner{
      width: 80%;
      height: 100%;
      margin: auto;
      
    }
    .carousel-item{    
     height: 100%;
     width: 100%;
    background-position: center;   
    }
    .carousel-item img{
     background-size: cover;
     height: 100%;
     width: 50%;
    }
/*card*/
.bl
{
  background: transparent;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-content: space-evenly;
  flex-wrap: wrap;
  width: 87%;
  margin: auto;
  
   
}

.bl .card{
  margin-top: 10px;
  margin-bottom: 10px;
  transition: all 1.5s ease;
  overflow: hidden;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
  border-style: solid;
  border-bottom-width: 4px;
  border-bottom-color: #ffd166;
  color:#a19ea0;
  font-weight: 500;
  
}

.bl .card .card-title{
  
  color:#ffdf00;
  font-weight: 600;
  
}

.bl .card:nth-of-type(2){
  
  border-bottom-color:  #d2ff55;
}
.bl .card:nth-of-type(2) .card-title{
  
  color:#d2ff55;
  
}

.bl .card:nth-of-type(3){
 
  border-bottom-color: #00d8ff;
}

.bl .card:nth-of-type(3) .card-title{
  
  color:#00d8ff;
  
}
.bl .card:nth-of-type(4){
 
  border-bottom-color: #42e700;
}

.bl .card:nth-of-type(4) .card-title{
  
  color:#42e700;
  
}
.bl .card:nth-of-type(5){
 
  border-bottom-color:#ff3b53 ;
}

.bl .card:nth-of-type(5) .card-title{
  
  color:#ff3b53;
  
}

.bl .card:nth-of-type(6){
 
  border-bottom-color:#293ae7;
}

.bl .card:nth-of-type(6) .card-title{
  
  color:#293ae7;
  
}


.bl .card .card-img-top{
  overflow: hidden;
}
.bl .card:nth-of-type(n):hover{
  transform: scale(1.02);
  box-shadow: 2px 2px 10px 0px #c3bdc3;
  opacity: 1;
  overflow: hidden;
 
}
#letest{
margin-left: 4.6em;
}
</style>
</head>

<body>
<div class="header">
<?php 
$active="home";
include('head.php'); 
?>

</div>
<div class="jumbotron">
  <h1 class="display-4">Give the gift of life Donate blood</h1>
  <p class="lead">Call-8790557100</p>
  <hr class="my-4">
  <p> There is no Substitute for blood. It only comes from generous donors.</p>
  <p class="lead">
    <a type="botton" class="btn btn-outline-danger btn-lg" href="find_blood.php" role="button">Find-donor</a>
  </p>
  <p class="lead">
    <a class="btn btn-outline-warning btn-lg" href="needblood.php" role="button">Become a doner</a>
  </p>
</div>
<br>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators " >
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item carousel-image bg-1mg-1 active">
      <img src="img/blood23.jpg" class="d-block w-100" alt="...">
     
    </div>
    <div class="carousel-item carousel-image bg-1mg-1">
      <img src="img/blood21.png" class="d-block w-100" alt="...">
       
    </div>
    <div class="carousel-item carousel-image bg-1mg-1">
      <img src="img/blood7.jpg" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
   <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon  bg-dark" aria-hidden="true"><a></a></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<br><br>
<!--card -->
<h3 id="letest">Letest Blood doner name</h3>
 <div class="bl">
  <?php 
  include 'conn.php';
  $sql="SELECT *  FROM donors ORDER BY id DESC limit 6";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
   
    while($row = mysqli_fetch_assoc($result));{
    foreach($result as $row)
    {
  
  
  
 ?>
 <div class="card" style="width: 18rem;">
  <img src="img/blood1.png" class="card-img-top" height="150px"alt="...">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['fullname']; ?></h4>
    <p class="card-text"><b>Bloodgrp : <?php echo $row['bloodgroup']; ?></b></p>
    <p class="card-text"><b>Number : <?php echo $row['mobile']; ?></b></p>
    <p class="card-text"><b>Email : <?php echo $row['email']; ?></b></p>
    <p class="card-text"><b>Date birth : <?php echo $row['dob']; ?></b></p>
    <p class="card-text"><b>Gender : <?php echo $row['sex']; ?></b></p>
    <p class="card-text"><b>Address : <?php echo $row['town']; ?></b></p>

   
  </div>
  
 

</div>

<?php }}} ?>
 </div>

<!-- php header -->
<?php
 include('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
