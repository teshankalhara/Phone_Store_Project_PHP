<link href="css/headerStyle.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<header class="p-3 bg-dark sticky-top">
  <div class="container container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ml-4">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ml-4 mr-4">
        <b>Apple.Mobiles</b>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-4 ml-4">
        <li class="mr-4"><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
        <li class="mr-4"><a href="index.php" class="nav-link px-2 text-white">Service</a></li>
        <li class="mr-4"><a href="aboutus.php" class="nav-link px-2 text-white">About</a></li>
        <li class="mr-4"><a href="faqs.php" class="nav-link px-2 text-white">FAQs</a></li>
      </ul>

      <?php
      if (isset($_SESSION['uid'])) {
        $namePro = $_SESSION['uname'];
        echo "<div id='shoppingcart' class='mr-4 col-4'>
                <a id='carticon' href='#'>
                    <i class='fa fa-shopping-cart'></i>
                    Cart
                    <span class='badge' style='font-size:medium;'>2</span>
                </a>
              </div>

              <div class='text-center ml-2'>
                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>Hello, <b>$namePro</b></a>
                  <div class='dropdown-menu bg-dark border-2 border-white mt-1 p-2'>
                      <div>
                          <a href='cart.php'>
                              <span class='glyphicon glyphicon-shopping-cart-large'></span>
                              Cart
                          </a>
                      </div>
                      <div><a href='#'>Change Password</a></div>
                      <div class='text-center'>
                          <a href='logout.php'>
                              <button type='button' class='btn btn-outline-danger m-2'><b>Logout</b></button>
                          </a>
                      </div>
                  </div>
              </div>";
      }
      ?>
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