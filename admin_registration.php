<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Blood Donation Admin Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
          /*  display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;*/
            /*background: url('img/blood20.jpg');*/
        }
        body img{
            background-size: cover;
        }
        
        .container {
            background-color: #fff;
            margin: auto;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            padding: 10px;
            padding-top: 2px;
            max-width: 400px;
            overflow: hidden; /* Hide any content overflow */
        }
        .container h2{
            color:	#ff4000;
            
        }

        .left-section {
            flex: 1;
            background: url('blood-donation-image.jpg') no-repeat center center;
            background-size: cover;
            height: 100%; /* Fill the container's height */
        }

        .right-section {
            flex: 2;
            padding: 40px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="password"], input[type="email"]{
            width: 100%;
            padding: 10px 0;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            transition: border-bottom 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-bottom: 2px solid #db423e; /* Change the border color on focus */
        }

        .submit-btn {
            background-color: #db423e;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #c23430;
        }
       
    </style>
</head>
<body>
   
    <div class="container">
        <!--<div class="left-section"></div>-->
        <div class="right-section">
            <h2> Admin Registration </h2>
            <form method="post">
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="name"></label>
                    <input type="email" id="name" name="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="email">password</label>
                    <input type="password" id="email" name="password" placeholder="Your password" required>
                </div>
                <div class="form-group">
                    <label for="password">number</label>
                    <input type="password" id="password" name="number" placeholder="Your number" required>
                </div>
            
                <button type="submit"  name="sub" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <br>
    <?php
 $conn=mysqli_connect("localhost","root","","bld_dntn") or die("Connection error");
 if($conn)
 {
 if(isset($_POST['sub']))
 {
 $r=$_POST['name'];
 $f=$_POST['email'];
 $e=$_POST['password'];
 $p=$_POST['number'];
 $query="INSERT INTO admin_info (admin_name,admin_username,admin_password,admin_number) values('$r','$f','$e','$p')";
 error_reporting(0);
 $r=mysqli_query($conn,$query);
 if($r)
 {
    echo 
    '<div class="alert alert-success" role="alert">
          succesfully registered 
          </div>';
 }
 else
 {
    echo '<div class="alert alert-danger" role="alert">
     somthing wrong?
          </div>';
 }
}
}
 ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
 </body>
 </html>