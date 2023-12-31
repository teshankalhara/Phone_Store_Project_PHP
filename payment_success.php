<?php
session_start();
include('config.php');
if (!isset($_SESSION['uid'])) {
    header('Location:index.php');
}
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM customer_order WHERE uid='$uid'";
$run_query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($run_query);
$trid = $row['tr_id'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="pic/logo.jpg">
    
    <title>Apple.Mobiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">
</head>

<body>


    <div class='container container-fluid p-5 mt-5'>
        <div class='row'>
            <div>
                <div class="card border-1 border-block-support-panel">
                    <div class="card-header text-bg-secondary text-center p-3">
                        <h1 class="card-title p-4">Thank you!</h1>
                    </div>
                    <div class="card-body p-5">
                        Hello <b><?php echo $_SESSION['uname']; ?>,</b> your payment was successful.
                        <br>Your Transaction ID is <b><?php echo $trid; ?></b>
                        <br>You can continue with your shopping.
                    </div>
                    <div class="card-footer text-center p-4">
                        <a href="profile.php" class='btn btn-outline-success btn-lg'>
                            <span style="font-weight: bold;">Back to store</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>