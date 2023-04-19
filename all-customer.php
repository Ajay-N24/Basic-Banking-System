<?php

require_once('config/db.php');
$query="select * from customer";
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="shortcut icon" type="image/png" href="./images/SB-ico.png">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    padding-top: 150px;
}
h1{
    text-align: center;
}
.ms-auto{
    margin-left: auto !important;
}
section .container-fluid{
    padding: 0% 10% 0% !important;
}
.navbar-brand img{
    width: 80px;
    border-radius: 50px;
}
.custom-row1{
    max-width: 1180px;
    margin-inline: auto;
    padding-inline: 20px;
}
.row-1{
    padding-block: 15%;
}
.money-1{
    width: 450px;
    position: relative;
    top: 14%;
    right: -34px;
}
.title{
   
}
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 1000px;
            min-height:700px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin-left: auto;
            margin-right: auto;
            margin-block: 3%;
        }

        .content-table thead tr {
            background-color: #2a478a;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #2a478a;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            /* color: #2a478a; */
        }
        .btn-pri{
            background-color: #ffb93f !important;
            color: #2a478a !important;
            border: 1px solid black;
        }
        .title{
            font-size: 2.4rem;
            font-weight: 800;
        }
        .lia{
    font-size: 1.1rem !important;
            }
            ul li{
    padding: 0 15px;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<section>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #13203f;" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="./images/SB.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link lia" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link lia" href="all-customer.php">View all Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link lia" href="send-money.php">Transfer Money</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link lia" href="transaction-history.php">Transaction History</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
  </section>
  <h1 class="title">All Customers</h1>
    <div class="rtab">
        <table class="content-table">
        <thead>
        <tr>
            <th>sr no</th>
            <th>Account no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
            <th style="text-align: center;">Transfer</th>
        </tr>
        </thead>
        <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        echo    '
            <tr>
              <td>'.$row['sr_no'].'</td>
              <td>'.$row['account_no'].'</td>
              <td>'.$row['name'].'</td>
              <td>'.$row['email'].'</td>
              <td>'.$row['current_balance'].'</td>
              <td style="text-align: center;">
              <a href="send-money.php?accountn='.$row['account_no'].'"
              <button type="button" class="btn btn-pri">Send Money</button>
              </a>
              </td>
            </tr>';
    }
    echo "</tbody>";
?>
    </table>
    </div>
    
</body>
</html>