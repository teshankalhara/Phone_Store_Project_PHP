<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('location:profile.php');
}
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/headerStyle.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--header-->
    <header class="p-3 bg-dark sticky-top mb-3">
        <div class="container container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ml-4">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ml-4 mr-4">
                    <b>Apple.Mobiles</b>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-4 ml-4">
                    <li class="mr-4"><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li class="mr-4"><a href="services.php" class="nav-link px-2 text-white">Service</a></li>
                    <li class="mr-4"><a href="aboutus.php" class="nav-link px-2 text-white">About</a></li>
                    <li class="mr-4"><a href="faqs.php" class="nav-link px-2 text-white">FAQs</a></li>
                    <li class="ml-2 bg-dark" style="width:250px;"><input type="text" class="form-control bg-dark text-white-50" id="search" name="" placeholder="Type to search..." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border:1px solid #3B71CA; font-size:medium;"></li>
                    <li style="top:10px;"><button class="btn btn-outline-primary" id="search_btn" name="search" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;"><i class="fa fa-search"></i></button></li>
                </ul>
                <!--login form-->
                <div class="text-end ml-lg-4">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In</a>
                    <div class="dropdown-menu bg-dark border-1 border-white mt-3">
                        <div>
                            <div class="panel panel-primary m-2 p-1">
                                <div class="panel-heading text-center text-info mb-1">
                                    <h3>Login</h3>
                                </div>
                                <div class="panel-heading text-center p-2">
                                    <input type="email" class="form-control m-1" id="email" placeholder="Email">
                                    <input type="password" class="form-control m-1" id="password" placeholder="Password">
                                    <p><br></p>
                                    <input type="submit" class="btn btn-outline-primary mb-1" id="login" value="Login" name="userLogin">
                                    <div>
                                        <!--<a href="#">Forgot Password?</a>-->
                                    </div>
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--login form-->

                <!--signup form-->
                <div class="text-end ml-lg-2">
                    <a href="signup.php"><button type="button" class="btn btn-outline-primary ml-lg-4">Sign-up</button></a>
                </div>
                <!--signup form-->
            </div>
        </div>
    </header>
    <!--header-->

    <!--content-->
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-2" id="myElement">
                <div id="get_cat">
                    <!--types of categories-->
                </div>

                <div id="get_brand">
                    <!--type of brands-->
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <div class="col-md-12" id="cartmsg">
                        <!--adding msg-->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        --Featured Products--
                        <div class='float-end'>
                            Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row section" id="get_product"></div>
                        <!--product-->
                    </div>
                    <div class="card-footer text-center">
                        <div class="text-center">
                            <ul class='pagination' id='pageno'>
                                <!--page num-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--click filter hide pagination num-->
        <script>
            $(document).ready(function() {
                $("#myElement,#search, #price_sort, #pop_sort").click(function() {
                    $("#pageno").hide();
                });
            });
        </script>
        <!--click filter hide pagination num-->

        <br>

        <div class="row">
            <!-- view product -->
            <div class="modal fade" id="prod_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="dynamic_content">
                            <!--view of product-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- view product -->
        </div>
    </div>
    <!--content-->

    <!--footer-->
    <?php require_once('footer.php'); ?>
    <!--footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>