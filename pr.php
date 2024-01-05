<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .dropdown {
     
      position: relative;
      display: inline-block;
      
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 300px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 5px;
      overflow: hidden;
      padding-bottom: 20px;
    }

    .dropdown.active .dropdown-content {
      display: block;
    }

    .dropdown-header {
      background-color: red;
      color: white;
      font-size: 24px;
      padding: 10px;
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
  </style>
</head>
<body>
  <div class="dropdown" id="dropdown">
    <div class="dropdown-header" onclick="toggleDropdown()">
      <div class="dropdown-icons">
        <span class="dropdown-flag-icon">🇮🇳</span>
        <span class="dropdown-user-icon">👤</span>
      </div>
    </div>
    <div class="dropdown-content">
      <div class="dropdown-item">
        <div class="info-div"> 
          <i class="fa fa-user">&nbsp;</i><?php error_reporting(0); echo $_SESSION["name"]; ?><br><br>
          <i class="fa fa-envelope">&nbsp;</i><?php error_reporting(0); echo $_SESSION["usernames"]; ?>
        </div>
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

  <script>
    function toggleDropdown() {
      var dropdown = document.getElementById("dropdown");
      dropdown.classList.toggle("active");
    }
  </script>
</body>
</html>
