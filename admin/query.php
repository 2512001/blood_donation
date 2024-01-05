<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      <style>
        body {
            margin: 0;
            padding: 0;
        }
        .container {
            padding-top: 13rem;
            max-width: 800px;
            color: black;
        }
        .page-title {
            margin-top: 20px;
        }
        .table-container {
            margin-top: 20px;
        }
        .table {
            background-color: white;
        }
        th, td {
            text-align: center;
        }
        .badge {
            font-size: 10px;
        }
        .btn-delete {
            background-color: aqua;
            padding: 5px 10px;
            text-decoration: none;
            color: black;
            border-radius: 5px;
        }
        .btn-delete:hover {
            background-color: #00bcd4;
        }
        /* Media Query for screens less than 600px wide */
        @media screen and (max-width: 550px) {
    .container {
        padding-top: 20px;
        max-width: 100px;
        float: left;
    }
    .table-container {
        margin-top: 10px;
    }
    .table {
        font-size: 12px;
    }
    th:first-child,
    td:first-child,
    th:nth-child(7), 
    td:nth-child(7),
    th:nth-child(6), 
    td:nth-child(6) {
        display: none; 
    }
}
    </style>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
    <?php 
    $active="query";
    include 'sidebar.php'; 
    ?>
    <div class="container">
        <h1 class="page-title">User Query</h1>
        <?php
        if (isset($_SESSION['usernames'])  == true) {
            $conn = mysqli_connect("localhost", "root", "", "bld_dntn") or die("Connection error");
            $sql = "SELECT * FROM contact_query";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="table-container">';
                echo '<table class="table table-bordered">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>S.no</th>';
                echo '<th>Name</th>';
                echo '<th>Email Id</th>';
                echo '<th>Mobile Number</th>';
                echo '<th>Message</th>';
                echo '<th>Posting Date</th>';
                echo '<th>Status</th>';
                echo '<th>Action</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                $count = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $count++ . '</td>';
                    echo '<td>' . $row['query_name'] . '</td>';
                    echo '<td>' . $row['query_mail'] . '</td>';
                    echo '<td>' . $row['query_number'] . '</td>';
                    echo '<td>' . $row['query_message'] . '</td>';
                    echo '<td>' . $row['query_date'] . '</td>';
                    echo '<td>';
                    if ($row['query_status'] == 1) {
                        echo '<span class="badge badge-success">Read</span>';
                    } else {
                        echo '<span class="badge badge-warning">Pending</span>';
                    }
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn-delete" href="delete_query.php?id=' . $row['query_id'] . '">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo 'No records found.';
            }
        } 
        else {
            $redirectUrl = "http://localhost/webproject/login.php";
           header("Location: " . $redirectUrl);
               exit;
        }
        ?>
    </div>
</body>
</html>
