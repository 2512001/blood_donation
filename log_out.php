<?php
require_once('session3.php');
session_unset();
session_destroy();
header("location:login.php");
?>