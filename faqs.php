<?php
session_start();
$searchBar = 'false';
$activePage = 'faqs';
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
        <h2>FAQs Page</h2>
        <div class="border m-2 p-2">
            <b>How to use?</b><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, nam eius accusamus delectus enim nesciunt laborum temporibus. Inventore dolores quod, magni blanditiis suscipit maiores beatae architecto sed saepe velit nihil.
        </div>
        <div class="border m-2 p-2">
            <b>How to use cart?</b><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nobis, at cupiditate excepturi ex quae in ut quidem dolor necessitatibus recusandae, nostrum, itaque eligendi numquam dicta exercitationem quas explicabo eius.
        </div>
        <div class="border m-2 p-2">
            <b>How to use cart?</b><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nobis, at cupiditate excepturi ex quae in ut quidem dolor necessitatibus recusandae, nostrum, itaque eligendi numquam dicta exercitationem quas explicabo eius.
        </div>
        <div class="m-3 text">
            <b>Contact Us - applemobile@gmail.com</b>
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