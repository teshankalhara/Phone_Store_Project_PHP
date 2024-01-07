<?php
session_start();
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="pic/logo.jpg">

    <title>Apple.Mobiles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">
</head>

<body>
    <!--header-->
    <header class="p-3 bg-dark sticky-top">
        <div class="container container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ml-4">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ml-4 mr-4">
                    <b>Apple.Mobiles</b>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-2 ml-4">
                    <li class="mr-4"><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li class="mr-4"><a href="services.php" class="nav-link px-2 text-white">Service</a></li>
                    <li class="mr-4"><a href="aboutus.php" class="nav-link px-2 text-white">About</a></li>
                    <li class="mr-4"><a href="faqs.php" class="nav-link px-2 text-white">FAQs</a></li>
                    <li class="ml-2 bg-dark text-white-50" style="width:250px;"><input type="text" class="form-control bg-dark text-white" id="search" name="" placeholder="Type to search..." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border:1px solid #3B71CA; font-size:medium;"></li>
                    <li style="top:10px;"><button class="btn btn-primary" id="search_btn" name="" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; "><i class="fa fa-search"></i></button></li>
                </ul>

                <div id='shoppingcart' class="mr-4">
                    <a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart"></i>
                        Cart
                        <span class="badge" style='font-size:medium;'>0</span>
                    </a>
                    <div class="dropdown-menu mt-1 p-3 bg-dark border-2 border-white mt-3" style="width: 400px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row text-white">
                                    <div class="col-md-3"><strong>S. No.</strong></div>
                                    <div class="col-md-3"><strong>Product Image</strong></div>
                                    <div class="col-md-3"><strong>Product Name</strong></div>
                                    <div class="col-md-3"><strong>Price in LKR</strong></div>
                                </div>
                                <hr>
                                <div class="text-white-50" id="cartmenu">
                                    <!-- adding items on cart-->
                                </div>
                            </div>
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center ml-1">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Hello, <b><?php echo $_SESSION['uname']; ?></b></a>
                    <div class="dropdown-menu bg-dark border-2 border-white mt-1 p-2">
                        <div>
                            <a href="cart.php">
                                <span class="glyphicon glyphicon-shopping-cart-large"></span>
                                Cart
                            </a>
                        </div>
                        <div><a href="changepassword.php">Change Password</a></div>
                        <div class="text-center">
                            <a href="logout.php">
                                <button type="button" class="btn btn-outline-danger m-2"><b>Logout</b></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header-->

    <!--content-->
    <div class="container container-fluid p-5">
        <div class="p-3">
            <div class='card card-info'>
                <div class='card-header text-center text-center'>
                    <h4>Change Password</h4>
                </div>
                <div class='card-body mb-0 text-center'>
                    <div class="row pl-2 pr-2">
                        <div class="col-md-6">
                            <label for="currentpassword">Current Password</label>
                            <input type="password" id="currentpassword" name="currentpassword" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="newpassword">New Password</label>
                            <input type="password" id="newpassword" name="newpassword" class="form-control">
                        </div>
                    </div>
                </div>
                <div class='card-footer'>
                    <div class='text-center mt-1'>
                        <button pid='$pro_id' class='product btn btn-outline-success btn-sm'><b>Confirm</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--content-->

    <!--footer-->
    <?php require_once('footer.php'); ?>
    <!--footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>