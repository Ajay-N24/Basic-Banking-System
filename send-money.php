<?include 'all-customer.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Send money</title>
    <link rel="shortcut icon" type="image/png" href="./images/SB-ico.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .formin {
            border-radius: 30px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            border-radius: 30px;
            font-weight: bold;
        }

        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
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
    .container-1{
        text-align: center;
        max-width: 400px;
        margin: auto;
    }
    .lia{
    font-size: 1.1rem !important;
            }
            ul li{
    padding: 0 15px;}
    </style>
</head>

<body style="padding-top:8%;">
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

    <!-- <center> -->

        <div class="container container-1" style="margin-top:2%;">
            <div>
                <h1 style="text-align: center; font-weight: 600">Transfer Money</h1>
            </div>
            <br><br>
            <div class="" style=" backdrop-filter: blur(5px);  border-radius:5px;  ">
                <form action="send-money.php" method="post">
                    <table>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno1" id=""
                                    placeholder="Sender's Account Number"
                                    value="<?php if(isset($_GET['accountn'])){echo $_GET['accountn'];} ?>"></td>
                        <tr>
                        <tr>
                            <td><input type="number" class="formin form-control" name="amount" id=""
                                    placeholder="Amount to Transfer"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno2" id=""
                                    placeholder="Reciever's Account Number"></td>
                        </tr>
                    </table>
                    <br><input class="btn mybtn btn-success" type="submit" value="Transfer"><br><br>
                </form>
            </div>
        </div>
        <?php 
$conn = mysqli_connect("localhost","root","","customers");
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
   
    
    $checkblcquery = "SELECT current_balance FROM customer where account_no='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $avail_blc = mysqli_fetch_assoc($checkblc)['current_balance'];

    if($avail_blc >= $amount){
    $sql1 = "UPDATE customer SET current_balance= current_balance-$amount WHERE account_no='$sender'";
    $sql2 = "UPDATE customer SET current_balance= current_balance+$amount WHERE account_no='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`,`Dat`) VALUES ('$sender', '$reciever', '$amount', 'succeed',current_timestamp())";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`,`Dat`) VALUES ('$sender', '$reciever', '$amount', 'failed',current_timestamp())";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`,`Dat`) VALUES ('$sender', '$reciever', '$amount', 'failed',current_timestamp())";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
    <!-- </center> -->




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>