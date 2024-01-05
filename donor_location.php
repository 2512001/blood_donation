<!DOCTYPE html>
<html>
<head>
    <title>Donor Location Search</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .text-center {
            color: #dd013e;
        }
       
        label {
            color: #333333; 
        }

        .btn-success {
            background-color: #dd013e;
            border-color: #dd013e; 
            color: #ffffff; 
            padding: 10px 20px;
            transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
        }

        .btn-success:hover {
            background-color: #ff003a; 
            border-color: #ff003a; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        .container {
            background-color: #ffffff; 
            color: #333333; 
            padding: 20px;
            padding-top: 54px;
            padding-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #blood {
            padding: 5px;
            transform: skew(0deg);
            border-radius: 2px;
            background: none;
        }

        select:focus,
        select:hover {
            border-color: #dd013e; 
            box-shadow: 0 0 5px rgba(221, 1, 62, 0.5); 
        }

        
      .table tr th{
        background-color: #dd013e; 
            color: white;
      }
    </style>
</head>
<body>
<?php
$active="";
include('head.php');
?>
    <div class="container mt-5">
        <h1 class="text-center">Search for Donor Locations</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="state">Enter State:</label>
                <input type="text" class="form-control" name="state" id="state" required>
            </div>
            <div class="form-group">
                <label for="town">Enter Town:</label>
                <input type="text" class="form-control" name="town" id="town" required>
            </div>
            <div class="form-group">
                <label for="bloodgroup">Blood Group:</label>
                <select id="blood" name="bloodgroup" required>
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
            <button type="submit" class="btn btn-success" name="search">Search</button>
        </form>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
        if ($conn == true) {
            if (isset($_POST["search"])) {
                $state = $_POST["state"];
                $town = $_POST["town"];

                if (isset($_POST["bloodgroup"])) {
                    $bloodgroup = $_POST["bloodgroup"];
                    $sql = "SELECT * FROM donors WHERE (TRIM(LOWER(town)) = TRIM(LOWER('$town')) OR TRIM(LOWER(states)) = TRIM(LOWER('$state'))) AND bloodgroup = '$bloodgroup'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<div class='container'>";
                        echo "<h2 class='mt-4'>Donor Locations:</h2>";
                        echo "<table class='table'>";
                        
                        echo "<tr>";
                        echo "<th >Full Name</th>";
                        echo "<th >Town</th>";
                        echo "<th >Bloodtype</th>";
                        echo "<th >Mobile</th>";
                        echo "</tr>";
                        
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='tr'>";
                            echo "<td>{$row['fullname']}</td>";
                            echo "<td>{$row['town']}</td>";
                            echo "<td>{$row['bloodgroup']}</td>";
                            echo "<td>{$row['mobile']}</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        echo "</div>";
                    } else {
                        echo "<p class='mt-4'>No donors found in the specified location.</p>";
                    }
                } else {
                    echo "<p class='mt-4'>Please select a blood group.</p>";
                }
            }
        } else {
            echo "<p class='mt-4'>Connection failed with database</p>";
        }
        ?>
    </div>
<?php
include('footer.php');
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
