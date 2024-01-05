<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .findtop {
            margin-top: 80px;
        }

        center {
            text-align: center;
        }

        h2 {
            padding-top: 15px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #dd013e; /* Change heading color */
        }

        .search-form {
            background-color: #f0f0f0;
            border: 1px solid #d8f3dc;
            border-radius: 5px;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
        }

        .search-form input[type="text"],
        .search-form input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .search-form input[type="submit"] {
            background-color: #dd013e; /* Change button background color */
            color: white;
            border: none;
            cursor: pointer;
        }

        .search-form input[type="submit"]:hover {
            background-color: #ff0056; /* Change button hover color */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }

        th, td {
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }

        th {
            background-color: #dd013e; 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        @media screen and (max-width: 768px) {
            h2 {
                font-size: 20px;
            }

            .search-form {
                padding: 10px;
            }

            .search-form input[type="text"],
            .search-form input[type="submit"] {
                padding: 8px;
                font-size: 12px;
            }

            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <?php
    $active = "find";
    include 'head.php';
    ?>
    <div class="findtop">
        <center>
            <marquee><font color="#ff4000"><h2>Search Data according blood group</h2></font></marquee>
            <div class="alert alert-warning"><p>Enter like this AB pos, A pos, O neg, A neg</p></div>
            <div class="search-form">
                <form method="post">
                    <label for="txt">Enter your Blood Group:</label>
                    <input type="text" id="txt" name="txt" required>
                    <br>
                    <input type="submit" value="Search" name="sub">
                </form>
            </div>
        </center>
    </div>
    <hr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
    if ($conn) {
        if (isset($_POST['sub'])) {
            $m = $_POST['txt'];
            $q = "SELECT * FROM donors WHERE bloodgroup='$m'";
            $i = mysqli_query($conn, $q);
            if (mysqli_num_rows($i) > 0) {
                echo "<table>";
                echo "<tr>
                        <th>Blood_Groups</th>
                        <th>Donor_Names</th>
                        <th>Citys</th>
                        <th>numbers</th>
                      </tr>";
                while ($n = mysqli_fetch_assoc($i)) {
                    echo "<tr>
                            <td>" . $n['bloodgroup'] . "</td>
                            <td>" . $n['fullname'] . "</td>
                            <td>" . $n['town'] . "</td>
                            <td>" . $n['mobile'] . "</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<center>No Data Available</center>";
            }
        }
    }
    ?>
    <br><br>
    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
