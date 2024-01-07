<?php
session_start();
require_once('config.php');
if (!isset($_SESSION['uid'])) {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="pic/logo.jpg">

    <title>Apple.Mobile</title>

    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
                    <!--
                    <li class="ml-2 bg-dark text-white-50" style="width:250px;"><input type="text" class="form-control bg-dark text-white" id="search" name="" placeholder="Type to search..." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border:1px solid #3B71CA; font-size:medium;"></li>
                    <li style="top:10px;"><button class="btn btn-primary" id="search_btn" name="" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; "><i class="fa fa-search"></i></button></li>
                    -->
                </ul>

                <div id='shoppingcart' class="mr-4 col-4">
                    <a id="carticon" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        Cart
                        <span class="badge" style='font-size:medium;'>2</span>
                    </a>
                    <!--
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
                                    <?php
                                    #adding items on cart
                                    ?>
                                </div>
                            </div>
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                    -->
                </div>

                <div class="text-center ml-2">
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

    <div class="container container-fluid mt-4 mb-2 p-2">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-12" id="cart_msg"></div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <span style="font-size: x-large; font-weight:bold;">Cart Checkout</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2"><b>Action</b></div>
                            <div class="col-md-2"><b>Product Image</b></div>
                            <div class="col-md-2"><b>Product Name</b></div>
                            <div class="col-md-2"><b>Product Price</b></div>
                            <div class="col-md-2"><b>Quantity</b></div>
                            <div class="col-md-2"><b>Price in LKR</b></div>
                        </div>
                        <hr>
                        <div id='cartdetail'>
                            <!-- bought items -->
                            <!-- total price -->
                        </div>
                    </div>



                    <div class="card-footer">
                        <?php if ($_SESSION['totalPrice'] > 0) { ?>
                            <button class='btn btn-outline-success btn-lg float-end mt-1 mb-1' id='checkout_btn' data-toggle="modal" data-target="#myModal">
                                <span style="font-weight: bold;">Checkout</span>
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php require_once('footer.php'); ?>
    <!--footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>