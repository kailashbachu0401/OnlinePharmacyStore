<?php
    session_start();
    
     if(!isset($_SESSION['mail']))
     {
         header("location:login.html");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="customer.css">
</head>
<body>
    <header>
        <section id="header">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">PMS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="customer.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">AboutUs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medicine.php">Medicine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mycart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderpage.php">Orders</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="logout2.php">Logout</a>
                    </li>
                </ul> 
                </div>    
                </div>
              </nav>
            </div>
        </section>
        <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 <h2>Pharmacy Management System</h2>
               
                 <p>Click below to Buy Medicine</p>   
                 <a href="medicine.php" class="btn">Medicine</a>
                </div>
</div>   
</div>

        </section>
        
        
    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>