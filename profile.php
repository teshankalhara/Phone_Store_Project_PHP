<?php
$searchBar = 'true';
$activePage = 'home';
session_start();
if (!isset($_SESSION['uid'])) {
    header('Location:index.php');
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!--header-->
    <?php require_once('header.php'); ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>