<?php

include("includes/db.php");
include("functions/function.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#"><strong>Pakaha.in</strong></a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li>
                        <a href="../login.php" class="btn btn-primary navbar-btn right">
                            <i class="fa-solid fa-wallet"></i>
                        </a>
                    </li>
                    <li>
                        <a href="../cart.php" class="btn btn-primary navbar-btn right">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Navbar Start -->
    <div class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li class="active"><a href="My_account.php">My Account</a></li>
                    <li><a href="../order.php">My Order</a></li>
                    <li><a href="https://en.eatlaza.com/p/contact.html">Support</a></li>
                    <li><a href="../index.php">Refresh</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
                <div class="collapse clearfix" id="search">
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required>
                            <span class="input-group-btn">
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


 <div id="content">
        <div class="container"><!-- container Start -->
            <div class="col-md-12"> <!-- col-md-12 start -->
                <ul class="breadcrumb">
                    <li> <a href="index.php"> Home </a> </li>
                    <li>shop</li>
                </ul>
            </div> <!-- col-md-12 End -->


            <div class="col-md-3"> <!-- col-md-3 start -->

             <?php
              include("includes/sidebar.php");
             ?>
  
            </div> <!-- col-md-3 End -->


            <div class="col-md-9"><!-- col-md-9 start -->

                <!-- Including my order.php page start -->
                <?php
                    if(isset($_GET["my_order"])){
                        include("my_order.php");
                    }
                ?>
                <!-- Including my order.php page start -->
                

                 <!-- Including pay offline.php page start -->
                <?php
                    if(isset($_GET["pay_offline"])){
                        include("pay_offline.php");
                    }
                ?>
                <!-- Including pay offline.php page start --> 

                <!-- Including edit_act.php page start -->
                <?php
                    if(isset($_GET["edit_act"])){
                        include("edit_act.php");
                    }
                ?>
                <!-- Including edit_act.php page start -->

                <!-- Including change_pass.php page start -->
                <?php
                    if(isset($_GET["change_pass"])){
                        include("change_pass.php");
                    }
                ?>
                <!-- Including change_pass.php page start --> 

                <!-- Including delete_ac.php page start -->
                <?php
                    if(isset($_GET["delete_ac"])){
                        include("delete_ac.php");
                    }
                ?>
                <!-- Including delete_ac.php page start -->

            </div> <!-- col-md-9 End -->

            

</div> <!-- container End -->
    </div> <!-- contant End -->


<!-- Footer start -->

<?php
    include("includes/Footer.php");
?>
  
<!-- Footer End -->


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
