<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        #page-container {
            margin: auto;
            max-width: 800px;
            margin-top: 45px;
        }

        #content-wrap {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea.form-control {
            resize: none;
        }

        .btn-primary {
            background-color: #ff003a;
            border-color: #ff003a;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 4rem;
        }
    </style>
</head>

<body>
    <?php $active = 'contact';
    include 'head.php'; ?>
    <?php
    if (isset($_POST["send"])) {
        $name = $_POST['fullname'];
        $number = $_POST['contactno'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
        $sql = "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
        echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
    }
    ?>
    <br>
    <div id="page-container">
        <div class="container" id="content-wrap">
            <h1 class="mt-4 mb-3" style="color:#dd013e;">Contact</h1>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <h3>Send us a Message</h3>
                    <form name="sentMessage" method="post">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="contactno" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea rows="6" class="form-control" id="message" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-primary">Send Message</button>
                    </form>
                </div>

                <div class="col-lg-4 mb-4">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
                    $sql = "select * from contact_info";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <br>
                            <p>
                                <strong>Address:</strong> <?php echo $row['contact_address']; ?>
                            </p>
                            <p>
                                <strong>Contact Number:</strong> <?php echo $row['contact_phone']; ?>
                            </p>
                            <p>
                                <strong>Email:</strong> <a href="#"><?php echo $row['contact_mail']; ?></a>
                            </p>
                    <?php
                }
            } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>
