<?php
$cookieLifetime = 30 * 24 * 60 * 60; // 30 days in seconds
session_set_cookie_params($cookieLifetime);

session_start();
?>