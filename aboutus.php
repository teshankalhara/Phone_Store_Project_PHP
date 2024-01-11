<?php
session_start();
$searchBar = 'false';
$activePage = 'about';
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
    <?php require_once('header.php'); ?>
    <!--header-->

    <!--content-->
    <div class="container container-fluid p-5">
        <h2>About Us Page</h2>
        <p>
            Welcome to Apple.Mobiles, where cutting-edge technology meets unbeatable deals!
            We are your go-to destination for all things mobile,
            bringing you the latest smartphones at prices that will make your wallet smile.
            At Apple.Mobiles, we believe in providing a seamless shopping experience,
            ensuring that you stay connected to innovation without breaking the bank.
            Explore our curated selection of top-tier mobile phones and discover a world of possibilities
            right at your fingertips. Welcome to a smarter, more connected
            future with Apple.Mobiles—where your next mobile upgrade is just a click away!
        </p>
    </div>
    <div class="container container-fluid p-5">
        <h2>Our Team</h2>
        <p>
            Our Team Members
        </p>
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