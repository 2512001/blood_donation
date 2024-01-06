<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Replace the following line with your actual logo link from the internet -->
    <link rel="icon" href="https://example.com/path-to-your-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.0.6/dist/locomotive-scroll.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 20px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            max-width: 80px;
            border-radius: 50%;
        }

        #main-container {
            padding: 120px 20px 100px; /* Added margin for the footer */
            background-color: #f4f4f4;
            color: #333;
            min-height: 100vh;
            text-align: center;
        }

        h1,
        p {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s, transform 0.8s;
        }

        h1 {
            color: #dd013e;
            font-size: 3em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #dd013e;
        }

        .animate {
            opacity: 1;
            transform: translateY(0);
        }

        .sample-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <!-- Replace the following logo div with your actual logo div -->
        <!-- <div class="logo">
            <img src="https://example.com/path-to-your-logo.png" alt="Logo">
        </div> -->
    </header>

    <div id="main-container">
        <h1 class="animate">Welcome to My Awesome Website!</h1>

        <p class="animate">
            Thank you for visiting my website. Here, you can explore various interesting topics, discover new things,
            and enjoy the amazing content we have to offer.
        </p>

        <p class="animate">
            Feel free to navigate through our website and make the most out of your visit. If you have any questions or
            feedback, don't hesitate to <a href="contact.php" class="animate">contact us</a>.
        </p>

        <div class="go-home animate">
            <i class="fa fa-home"></i>
            <a href="home.php" class="animate">Find and Become donor</a>
        </div>

        <div class="find-donor animate">
            <i class="fa fa-search"></i>
            <a href="needblood.php" class="animate">contact-us</a>
        </div>

        <!-- Modern-looking Image from the Internet -->
        <img class="sample-image animate" src="img/blood-girl2.png" alt="Modern Image">
    </div>

    <footer>
        Developed by Deepak Goswami © 2024
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
    <!-- <script>
        const scroll = new LocomotiveScroll({
            el: document.querySelector("#main-container"),
            smooth: true,
        });
    </script> -->
</body>

