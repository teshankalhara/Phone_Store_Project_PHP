<link href="css/headerStyle.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<header class="p-3 bg-dark sticky-top shadow-5-strong">
  <div class="container container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ml-4">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-4 ml-4">
        <a href="index.php" style="font-size:x-large;"class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ml-1 mr-4">
          <b>Apple.Mobiles</b>
        </a>
        <li class="nav-item mr-4"><a href="index.php" <?php echo ($activePage == 'home') ? 'class="px-2 nav-link""' : 'class="nav-link px-2 text-white"'; ?>>Home</a></li>
        <li class="nav-item mr-4"><a href="services.php" <?php echo ($activePage == 'services') ? 'class="px-2 nav-link""' : 'class="nav-link px-2 text-white"'; ?>>Service</a></li>
        <li class="nav-item mr-4"><a href="aboutus.php" <?php echo ($activePage == 'about') ? 'class="px-2 nav-link""' : 'class="nav-link px-2 text-white"'; ?>>About</a></li>
        <li class="nav-item mr-4"><a href="faqs.php" <?php echo ($activePage == 'faqs') ? 'class="px-2 nav-link""' : 'class="nav-link px-2 text-white"'; ?>>FAQs</a></li>
        <li <?php echo ($searchBar != 'true') ? 'class="d-none"' : 'class="ml-2 bg-dark text-white-50"'; ?> style="width:225px;"><input type="text" class="form-control bg-dark text-white" id="search" name="" placeholder="Type to search..." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 0px;border-bottom-right-radius: 0px; border:1px solid #3B71CA; font-size:medium;"></li>
        <li style="top:10px;" <?php echo ($searchBar != 'true') ? 'class="d-none"' : ''; ?>><button class="btn btn-primary" id="search_btn" name="search" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; "><i class="fa fa-search"></i></button></li>
        <!-- login or signup-->
        <?php
        if (!isset($_SESSION['uid'])) {
          echo '
        <!--login form-->
        <div class="nav-item text-end ml-lg-4 mb-md-0 mt-1">
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
        <li class="nav-item text-end ml-lg-2  mb-md-0">
            <a href="signup.php"><button type="button" class="btn btn-outline-primary ml-lg-4">Sign-up</button></a>
        </li>
        <!--signup form-->
        ';
        }
        if (isset($_SESSION['uid'])) {
          $namePro = $_SESSION['uname'];
          echo '
                <li id="shoppingcart" class="mt-2 ml-4 mr-4">
                    <a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none;">
                        <i class="fa fa-shopping-cart"></i>
                        Cart
                        <span class="badge" style="font-size:medium;">&nbsp;</span>
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
                </li>';
          echo "<li class='mt-2 nav-item text-end ml-lg-4 mb-md-0'>
                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>Hello, <b>$namePro</b></a>
                  <div class='dropdown-menu bg-dark border-2 border-white mt-1 p-2'>
                      <div>
                          <a href='cart.php'>
                              <span class='glyphicon glyphicon-shopping-cart-large'></span>
                              Cart
                          </a>
                      </div>
                      <div><a href='changepassword.php'>Change Password</a></div>
                      <div class='text-center'>
                          <a href='logout.php'>
                              <button type='button' class='btn btn-outline-danger m-2'><b>Logout</b></button>
                          </a>
                      </div>
                  </div>
                </li>
              ";
        }
        ?>
        <!-- login or signup-->
      </ul>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="js/main.js"></script>
