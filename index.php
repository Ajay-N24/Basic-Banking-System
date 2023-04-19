<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
    <link rel="shortcut icon" type="image/png" href="./images/SB-ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9ee9bdc61a.js" crossorigin="anonymous"></script>
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
            <div class="row container custom-row1">
              <div class="col-lg-6 row-1">
                <h1 class="title" style="color: #2a478a;">Welcome to Sparks Bank</h1>
                <p>Transfer money, Check balance, View transaction history all at one place</p>
                <button class="btn btn-lg" style="background-color: #ffb93f; color: black;">Get Started</button>
              </div>
              <div class="col-lg-6">
                <img class="money-1" src="./images/realcover.png" alt="money">
              </div>
            </div>
  </section>
  <section class="services">
    <div class="container">
      <h1 class="services-title">Our Services</h1>
      <div class="row services-row">
        <div class="col services-col">
        <i class="fas fa-duotone fa-user-group fa-6x"></i>
          <h3>View all Customers</h3>
          <p>Shows a List of All the customers.<p>
          <button class="btn" style="background-color: #ffb93f;">View Customers</button>
        </div>
        <div class="col services-col">
        <i class="fas fa-duotone fa-money-bill-transfer fa-6x"></i>
          <h3>Transfer Money</h3>
          <p>Transfer Money from One account to another.<p>
          <button class="btn" style="background-color: #ffb93f;">Tranfer</button>
        </div>
        <div class="col services-col">
          <i class="fas fa-solid fa-clock-rotate-left fa-6x"></i>
          <h3>Transaction History</h3>
          <p>View all the Transactions Done on the System.<p>
          <button class="btn" style="background-color: #ffb93f; ">Transactions</button>
        </div>
      </div>
    </div>
  </section>
  <section class="footer">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
         <h3>Sparks Foundation</h3>
      </div>
    <div class="col-lg-12 footer-socials">
      <ul class="socials">
      <li><a href="https://www.linkedin.com/company/the-sparks-foundation/"><i class="fa-brands fa-linkedin fa-6xl" style="color: #1E3050"></i></a></li>
      <li><a href="https://twitter.com/tsfsingapore?lang=en"><i class="fa-brands fa-twitter" style="color: #1E3050"></i></a></li>
      <li><a href="https://www.facebook.com/thesparksfoundation.info/"><i class="fa-brands fa-facebook" style="color: #1E3050"></i></a></li>
    </ul>
    </div>
    </div>
    
    
    </div>
  </section>
</body>
</html>