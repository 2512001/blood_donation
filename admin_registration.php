<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            max-width: 400px;
            overflow: auto;
            width: 90%; /* Adjusted for responsiveness */
        }

        .container h2 {
            color: #ff4000;
            margin-bottom: 20px;
        }

        .right-section {
            width: 100%;
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 0;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            transition: border-bottom 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-bottom: 2px solid #db423e;
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

        footer {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }
    </style>
    <title>Blood Donation Admin Registration</title>
</head>
<body>

    <div class="container">
        <div class="right-section">
            <h2>Admin Registration</h2>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" required>
                </div>

                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" id="number" name="number" placeholder="Your Number" required>
                </div>

                <button type="submit" name="sub" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <footer>&copy; <?php echo date("Y"); ?> Blood Donation System</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
