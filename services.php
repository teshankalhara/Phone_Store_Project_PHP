<?php
session_start();
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
        <h2>Services Page</h2>
        <p>
            Our knowledgeable team is here to assist you in making informed decisions.
            Whether you're seeking advice on the latest models or need help choosing the perfect device for your lifestyle,
            we're dedicated to providing expert guidance tailored to your preferences.
        </p>
        <div class="border m-2 p-2">
            <b>Seamless Purchasing:</b><br>
            Our knowledgeable team is here to assist you in making informed decisions. Whether you're seeking advice on the latest models or need help choosing the perfect device for your lifestyle,
            we're dedicated to providing expert guidance tailored to your preferences.
        </div>
        <div class="border m-2 p-2">
            <b>Transparent Transactions:</b><br>
            Navigating the world of mobile technology should be effortless. Our streamlined purchasing process ensures a hassle-free experience, allowing you to secure your desired device with ease.
            We value your time and make every effort to simplify the journey from selection to checkout.
        </div>
        <div class="border m-2 p-2">
            <b>Warranty and Support:</b><br>
            Trust is essential, especially when it comes to online transactions. At Apple.Mobiles, we prioritize transparency. Our straightforward pricing and clear policies ensure that you have a complete understanding of your purchase,
            making your transaction as smooth and secure as possible.
        </div>
        <div class="border m-2 p-2">
            <b>Fast and Reliable Shipping:</b><br>
            Your excitement shouldn't be kept waiting. Experience prompt and reliable shipping services, 
            ensuring that your new mobile companion reaches your doorstep swiftly and securely. 
            We believe in delivering not just products but a promise of promptness.
            <br>
            Discover a service experience that mirrors the excellence of our mobile devices. 
            At Apple.Mobiles, we are dedicated to providing you with the utmost satisfaction 
            and support throughout your journey with us.
            Welcome to a service that exceeds expectations – your satisfaction is our priority.
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