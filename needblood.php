<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood-donation-donor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: white;
            color: black;
        }

        .container-fluid {
            margin-top: 3rem;
            background-color: white;
        }

        form {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: black;
        }

        input[type="submit"] {
            background-color: #198754;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #dd013e;
        }

        .row {
            background-color: white;
        }
        #fluid{
            background-color: white;
        }
    </style>
</head>
<body>
    <?php
        $active = "need";
        include 'head.php';
    ?>

    <div class="container-fluid " id="fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 form-element">
                <form method="post">
                    <font color="#dd013e"><h2>donor registration</h2></font>
                    
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Full Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dob" class="col-sm-3 col-form-label">Date of Birth:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender:</label>
                        <div class="col-sm-9">
                            <input type="radio" id="male" name="gender" value="Male" required>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female" required>
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="Other" required>
                            <label for="other">Other</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bloodgroup" class="col-sm-3 col-form-label">Blood Group:</label>
                        <div class="col-sm-9">
                            <select id="bloodgroup" class="form-control" name="bloodgroup" required>
                                <option value="A pos">A+</option>
                                <option value="B pos">B+</option>
                                <option value="AB pos">AB+</option>
                                <option value="O pos">O+</option>
                                <option value="A neg">A-</option>
                                <option value="B neg">B-</option>
                                <option value="AB neg">AB-</option>
                                <option value="O neg">O-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number" class="col-sm-3 col-form-label">Number:</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="number" name="number" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="town" class="col-sm-3 col-form-label">Town:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="town" name="town" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="state" class="col-sm-3 col-form-label">State:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
        if ($conn) {
            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $bloodgroup = $_POST['bloodgroup'];
                $number = $_POST['number'];
                $email = $_POST['email'];
                $town = $_POST['town'];
                $state = $_POST['state'];

                $q = "INSERT INTO donors (fullname, dob, sex, bloodgroup, mobile, email, town, states)
                    VALUES ('$fullname', '$dob', '$gender', '$bloodgroup', '$number', '$email', '$town', '$state')";
                $r = mysqli_query($conn, $q);
                if ($r) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>' . $fullname . '</strong> Registered successfully! Thanks for donating blood.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                } else {
                    echo "Data not inserted: " . mysqli_error($conn);
                }
            }
        }
    ?>

    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
