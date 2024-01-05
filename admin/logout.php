<?php
session_start();
session_unset();
session_destroy();
$redirectUrl = "http://localhost/webproject/login.php";
header("Location: " . $redirectUrl);
exit;
?>