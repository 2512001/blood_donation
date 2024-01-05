<?php 
session_start();

?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

.navbar {
  overflow:hidden;
  background-color:  #273746;
  top: 0;
  width:100%;
  padding: 15px 10px;
  color:#FF0404  ;
  
}.webname{
  display: flex;
  padding: 0px 10px;
}
.webname h2{
 color: #dd013e;

}
.webname h4{
  color:white;
 margin-top: 16px;
 font-size: 18px;
}

.navbar-nav .nav-item a{
  text-align: center;
  padding: 8px;
  text-decoration: none;
  font-size: 18px;
  line-height: 20px;
  border-radius: 4px;
  font-weight:bold;
  color: #fff;
}


 .navbar-nav .nav-item  a:hover {
  background-color: #ddd;
  color: black;
}



@media screen and (max-width: 991px) {
  .nav-item{
    margin: auto;
  }
  
.navbar-nav .admin{
  margin: auto;
}
  
hr{
  display: none;
}

.dropdown-content .withoutsession{
 display: none;
}

.navbar-toggler{
  margin-right: 1rem;
}
.navbar-toggler-icon{
  background-color: red;
}
 

 
}

.navbar-nav .nav-item .acts{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius: 30px;
}
.navbar-nav .nav-item a .logo2{
  background-color: #333;
}
.navbar{
 padding: 20px;
}
.navbar-nav{
  font-size: 20px;

  
}
.navbar-nav .nav-item{
  padding: 5px;
  font-size: 20px;
  font-weight: 600;
}
.dropdown 
{
  position: relative;
  display: inline-block;
  z-index: 1; 

}

.dropdown-content {
  display: none;
  position: fixed;
  top: 62px;
  right: 1px;
  background-color: #fff;
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 2; 
  border-radius: 5px;
  overflow: hidden;
  padding-bottom: 20px;
}


   .dropdown.active .dropdown-content {
     display: block;
   }

   .dropdown-header {
     margin-right: 10px;
     color: white;
     font-size: 24px;
     padding: 15px;
     text-align: center;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
     display: flex;
     justify-content: space-between;
     align-items: center;
   }

   .dropdown-icons {
     display: flex;
     align-items: center;
     border: 1px solid ;
     padding: 10px;
     background-color: white;
     border-radius: 10px;
     
   }

   .dropdown-email-icon,
   .dropdown-user-icon {
     margin: 0 5px;
   }
   
   .dropdown .btn {
     display: flex;
     flex-direction: column;
     align-items: center;
   }
   
   .dropdown-button {
     background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
     color: #fff; 
     text-align: center;
     padding: 10px;
     letter-spacing: 1px;
     border-radius: 5px;
     margin-top: 10px;
     width: 80%;
     text-decoration: none;
   }
   .dropdown-button:nth-of-type(1)
   {
     border: 1px solid red;
     background: none;
     color: #333;
     
   }
   
   .dropdown-button:hover {
     opacity: 0.8;     
   }
   .dropdown-button:hover:nth-of-type(1)
   {

     border: 1px solid red;
     opacity: 1;
     color:red;
           
   }

   .info-div {
     background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
     color: white;
     width: 100%;
     padding: 15px;
     letter-spacing: 1px;
     left: 0;
   }
   .withoutsession{
     background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
     color: #fff; 
     text-align: center;
     padding: 10px;
     letter-spacing: 1px;
     
   }
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
  <div class="webname"><h2>Blood</h2><h4>&donation</h4></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      
      <li class="nav-item">
        <a  href="why_donate_blood.php" <?php if($active=='why_donate') echo "class='acts'"; ?>>Why donate blood</a>
      </li>
      <li class="nav-item ">
      <i class="fa fa-user-magnifying-glass"></i>
        <a  href="about_us.php" <?php if($active=='about_us') echo "class='acts'"; ?>>About-US</a>
      </li>
      <li class="nav-item">
      <i class="fa fa-magnifying-glass"></i>
        <a  href="find_blood.php" <?php if($active=='find') echo "class='acts'"; ?>>Find Blood</a>
      </li>
      <li class="nav-item">
      <i class="fa fa-users-line"></i>
        <a  href="needblood.php" <?php if($active=='need') echo "class='acts'"; ?>>Become a donor</a>
      </li>
      <li class="nav-item">
      <i class="fa fa-address-card"></i>
            <a  href="contact_us.php" <?php if($active=='contact') echo "class='acts'"; ?>>Contact US</a>
      </li>
    
      <li class="admin">
      <div class="dropdown" id="dropdown">
    <div class="dropdown-header" onclick="toggleDropdown()">
      <div class="dropdown-icons">
        <span class="dropdown-flag-icon">🇮🇳</span>
        <span class="dropdown-user-icon">👤</span>
      </div>
    </div>
    <div class="dropdown-content">
      <div class="dropdown-item">
      <?php
       error_reporting(0);
      if ($_SESSION['usernames'] == true) {
         echo "<div class='info-div'> 
          <i class='fa fa-user'> &nbsp; </i> " . $_SESSION['name'] . "<br><br>
          <i class='fa fa-envelope'>&nbsp;</i> " . $_SESSION['usernames'] . "
        </div>";
     }
     else{
      echo "<div class='withoutsession'>Admin log in here !?</div>";
     }
           ?>
        <hr> 
        <div class="btn">
          <?php error_reporting(0); if ($_SESSION['usernames'] == true): ?>
            <a class="dropdown-button" href="log_out.php">Logout</a>
          <?php else: ?>
            <a class="dropdown-button" href="login.php">Login</a>
          <?php endif; ?>
          <a class="dropdown-button" href="admin_registration.php">Registration</a>
          <?php error_reporting(0); if ($_SESSION['usernames'] == true): ?>
            <a class="dropdown-button" href="admin/dashboard.php">Adminin</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

      </li>
    </ul>
  </div>
</nav>

<script>
       function toggleDropdown() {
      var dropdown = document.getElementById("dropdown");
      dropdown.classList.toggle("active");
    }
    </script>
</body>
</html>
