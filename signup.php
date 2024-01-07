<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="pic/logo.jpg">
    
    <title>Apple.Mobiles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/body.css" rel="stylesheet">
    <style>
        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #337ab7;
            text-align: center;
            font-size: larger;
            padding: 10px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .panel-body {
            padding: 15px;
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 2px solid black;
            border-radius: 4px;
            box-shadow: 0px 2px 8px #343A40;
        }
    </style>
</head>

<body>
    <?php require_once('header.php'); ?>

    <p><br><br></p>

    <div class="container container-fluid mb-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg"></div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading bg-dark">Signup Form</div>
                    <form method="post" action="">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">First Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">Last Name</label>
                                    <input type="text" id="l_name" name="l_name" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" maxlength="10">
                                </div>
                                <div class="col-md-6"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address #1</label>
                                    <input type="text" id="address1" name="address1" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address #2</label>
                                    <input type="text" id="address2" name="address2" class="form-control">
                                </div>
                            </div>

                            <br><br>
                            <div class="text-center">
                                <input type="button" class="w-100 btn btn-primary" value="Sign Up" name="signup" id="signup_btn" style="font-weight:500;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <?php require_once('footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>