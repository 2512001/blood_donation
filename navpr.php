<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Style the dropdown button */
.dropdown-toggle {
  padding: 10px 15px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  cursor: pointer;
}

/* Style the dropdown content */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the individual links inside the dropdown */
.dropdown-content a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
  color: #333;
}

/* Add a hover effect for the links */
.dropdown-content a:hover {
  background-color: #f1f1f1;
}

/* Show the dropdown content when hovering over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Style the admin button at the top */
.dropdown-toggle::before {
  content: "\f007"; /* Unicode for a user icon, you can replace this with your preferred icon */
  font-family: FontAwesome; /* Assuming you're using FontAwesome for icons */
  margin-right: 5px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav>
  <div class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropdown-toggle" id="adminToggle">Admin</button>
          <div class="dropdown-content">
            <?php error_reporting(0); if($_SESSION['usernames']==true){echo "HI ".$_SESSION["name"]; }?>
            <?php error_reporting(0); if($_SESSION['usernames']==true){echo "<a href='log_out.php'>Logout</a>";}?>
            <?php error_reporting(0); if($_SESSION['usernames']==false){echo "<a href='login.php'>Login</a>";}?>
            <a href='admin_registration.php'>Registration</a>
            <?php error_reporting(0); if($_SESSION['usernames']==true){echo "<a href='admin/dashboard.php'>Adminin</a>";}?>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>