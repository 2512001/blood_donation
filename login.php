<?php
   include 'login2.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Box with Bottom Line and Label Animation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Center align everything */
        body {
             
            height: 100vh;
            margin: 0;
        /*  background: url('img/blood18.jpg');*/
          background-size: cover;
       /* background-color: #4d94ff;*/
      


        }
        body img{
          background-size: cover;
        }
         .login-man{

            display: flex;
            justify-content: center;
            width: 60%;
            margin: auto;
           /* border: 1px solid #4da6ff ;*/
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            border: 1px solid #ff4000;

            
         }
        /* Style for the input container */
        .input-container {
            display: flex;
            flex-direction: column;
           /* border: 1px solid;*/
            padding: 0px 20px;
            padding-bottom: 20px;
            box-shadow: 1px 1px  6px  #d9d9d9;
            width: 80%;
        }
        .input-container div{
            padding: 10px;
        }
        .input-lable h1{
          color:	#ff4000;
        }
        /* Basic styles for the input and label */
        label {
            position: relative;
            transform-origin: left bottom;
            transform: scaleX(1);
            transition: transform 0.3s ease-out;
            font-size: 14px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px 0;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            background: transparent;
        }

        /* Animation when input is focused or has content */
        input:focus + label,
        input:valid + label {
            transform: scaleX(0);
        }
        .icon{
            display: flex;
            justify-content:space-between;
            /*border: 1px solid red;*/
        }
        .input-text{
            display: flex;
            justify-content: space-between;
        }
        .image-container{

            padding: 20px;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
           /* border: 1px solid red;*/
           

        }
       

      .image img{

           width: 100%;
           height: 100%;
           

        }
        #forgot
        {
         /* border:1px solid red; */
          padding-left: 10px;
         
          display: flex;
         justify-content: end;
        }
      .botton{
      /*  border:1px solid; */
        padding-left: 10px;
       

      }
      .botton input{
      border-radius: 60px;
      cursor: pointer;
      background: none;
      box-shadow: 1px 1px  6px  #d9d9d9;
      border: 1px solid #ff4000;

      }
      .botton input:hover{
        opacity:0.6;
        box-shadow: 1px 1px  6px  #d9d9d9;

      }
      .account{
        text-align: center;
      }
    </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar ">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/blood-drop.png" alt="Bootstrap" width="70" height="50">
    </a>
  </div>
</nav>

    <form  method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="login-man">
    <div class="input-container">
        <div class="input-lable"><h1>Admin login</h1></div>
        <div>
            <div class="icon"><label for="username" required>Username</label><i class="fa-solid fa-user"></i></div>
            <div class="input-text"><input type="text" id="username" name="username" required></div>
        </div>
        <div>
            <div class="icon"><label for="password" required>Password</label><i class="fa-solid fa-lock"></i></div>
            <div class="input-text"><input type="password" id="password" name="password" required></div>
            
        </div>
        <div id="forgot">
           <a href="#">Forgot password?</a> 
        </div>
        <div class="botton">
          <input type="submit" value="login" name="login">
        </div>
    </div>
      <div class="image-container">
        
       <div class="image">
        <img src="img/blood12.png" >
       </div>
       <div class="account"><label>If don't have account?<a href="admin_registration.php" target="_blank"> Create account</a><label>
</div>
    </div>
    </div>
    <br>
    <br>
    </form>
   <?php
   include 'footer.php';
   ?>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
