<?php
session_start();

if (isset($_POST['login'])) {
    include('conn.php');

    $u = mysqli_real_escape_string($conn, $_POST['username']);
    $p = $_POST['password'];
    $sql = "SELECT * FROM admin_info WHERE admin_username='$u' and admin_password='$p'";
    $result = mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user_ids'] = $row['admin_id'];
            $_SESSION['usernames'] = $row['admin_username'];
            $_SESSION['password'] = $row['admin_password'];
            $_SESSION['name'] = $row['admin_name'];
           
            header("location:home.php");
        }
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show fixed-alert" role="alert ">
        <center><b>You Entered wrong password and username</b></center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
    </style>
</head>
<body>

</body>
</html>
