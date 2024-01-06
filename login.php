<?php
include 'login2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Bootstrap's default background color */
            font-family: 'Arial', sans-serif;
        }

        .login-man {
            display: flex;
            justify-content: center;
            width: 80%;
            margin: auto;
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            border: 1px solid #ff4000;
            background-color: #fff; /* White background */
            border-radius: 10px;
            margin-top: 3rem;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-shadow: 1px 1px  6px  #d9d9d9;
            width: 100%;
        }

        label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: color 0.3s ease, font-size 0.3s ease;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px 0;
            border: none;
            outline: none;
            background: transparent;
            font-size: 16px;
            border-bottom: 1px solid #ccc;
            position: relative;
            transition: border-bottom 0.3s ease, color 0.3s ease;
        }

        input:focus + label,
        input:valid + label {
            font-size: 12px;
            color: #ff4000; /* Red color on focus or valid */
        }

        input:focus {
            border-bottom: 2px solid #ff4000; /* Red border on focus */
        }

        .icon {
            display: flex;
            justify-content: space-between;
        }

        .input-text {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            position: relative;
        }

        .image-container {
            padding: 20px;
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .botton {
            padding-left: 10px;
            margin-top: 30px; /* Increased margin for better separation */
        }

        .botton input {
            border-radius: 30px;
            cursor: pointer;
            background-color: #ff4000; /* Button color */
            color: #fff; /* Text color */
            font-size: 16px;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .botton input:hover {
            background-color: #e63900; /* Hover state color */
        }

        .account {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        @media (max-width: 768px) {
            .login-man {
                flex-direction: column;
                align-items: center;
            }

            .image-container {
                display: none;
            }
        }

        /* New styles for improved spacing */
        .input-text label,
        .input-text input {
            margin-bottom: 20px;
        }

        .botton {
            margin-top: 30px; /* Increased margin for better separation */
        }
    </style>
</head>
<body data-scroll-container>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/blood-drop.png" alt="Bootstrap" width="70" height="50">
            </a>
        </div>
    </nav>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="login-man">
            <div class="input-container">
                <div class="input-lable"><h1>Admin Login</h1></div><br>
                <div class="input-text">
                    <input type="text" id="username" name="username" required>
                    <label for="username" required>Username</label>
                </div>
                <div class="input-text">
                    <input type="password" id="password" name="password" required>
                    <label for="password" required>Password</label>
                </div><br>
                <div id="forgot">
                    <a href="#">Forgot password?</a> 
                </div>
                <div class="botton">
                    <input type="submit" value="Login" name="login">
                </div>
            </div>
            <div class="image-container">
                <div class="image">
                    <img src="img/blood12.png" alt="Blood Image">
                </div>
                <div class="account">
                    <p>If you don't have an account? <a href="admin_registration.php" target="_blank">Create account</a></p>
                </div>
            </div>
        </div>
    </form>
<br>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const scroll = new LocomotiveScroll({
            el: document.querySelector('[data-scroll-container]'),
            smooth: true
        });
    </script>
</body>
</html>
