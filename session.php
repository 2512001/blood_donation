<?php
session_start();
echo "welcome ".$_SESSION['name'];
error_reporting(E_ALL);
?>