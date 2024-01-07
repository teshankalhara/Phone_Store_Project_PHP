<?php
session_start();
include('config.php');

if (isset($_POST["category"])) {
    $category_query = "SELECT * FROM categories";
    $run_query = mysqli_query($conn, $category_query);

    echo "<div class='nav flex-column nav-pills'>";
    echo "<li class='nav-item'>
            <a class='nav-link active' href='#'><h4>Categories</h4></a>
        </li>";

    if (mysqli_num_rows($run_query)) {
        while ($row = mysqli_fetch_array($run_query)) {
            $cid = $row['cat_id'];
            $cat_name = $row['cat_title'];

            echo "<li class='nav-item'>
                    <a href='#' class='nav-link category' cid='$cid'>$cat_name</a>
                </li>";
        }
    }
    echo "</div>";
}

if (isset($_POST["brand"])) {
    $category_query = "SELECT * FROM brands";
    $run_query = mysqli_query($conn, $category_query);

    echo "<div class='nav flex-column nav-pills'>";
    echo "<li class='nav-item'>
            <a class='nav-link active' href='#'><h4>Brands</h4></a>
        </li>";

    if (mysqli_num_rows($run_query)) {
        while ($row = mysqli_fetch_array($run_query)) {
            $bid = $row['brand_id'];
            $brand_name = $row['brand_title'];
            echo "<li class='nav-item'>
                    <a href='#' class='nav-link brand' bid='$bid'>$brand_name</a>
                </li>";
        }
    }
    echo "</div>";
}

#pagination numbers
if (isset($_POST['page'])) {
    $sql = "SELECT * FROM products";
    $run_query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($run_query);
    $pageno = ceil($count / 12);
    for ($i = 1; $i <= $pageno; $i++) {
        echo "<li class='page-item text-center'><a href='#' class='page page-link' page='$i'>$i</a></li>";
    }
}
#pagination numbers

#display products
if (isset($_POST['getProduct'])) {
    $limit = 12;

    $pageno = (isset($_POST['setPage'])) ? $_POST['pageNumber'] : 1;

    $start = ($pageno - 1) * $limit;

    if (isset($_POST['price_sorted'])) {
        $product_query = "SELECT * FROM products ORDER BY product_price LIMIT $start, $limit";
    } elseif (isset($_POST['pop_sorted'])) {
        $product_query = "SELECT * FROM products ORDER BY RAND() LIMIT $start, $limit";
    } else {
        $product_query = "SELECT * FROM products LIMIT $start, $limit";
    }

    $run_query = mysqli_query($conn, $product_query);

    if (mysqli_num_rows($run_query)) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $brand = $row['product_brand'];
            $title = $row['product_title'];
            $price = $row['product_price'];
            $img = $row['product_image'];

            echo "<div class='col-12 col-md-6 col-lg-4 mb-2'>
                    <div class='card card-info'>
                        <div class='card-header text-center'><b>$title</b></div>
                        <div class='card-body mb-0 text-center'>
                            <a href='#' class='imageproduct text-center' pid='$pro_id'>
                                <img src='assets/prod_images/$img' class='card-img-top text-center img-fluid' alt='Product Image' style='width:200px; height:200px;'>
                            </a>
                        </div>
                        <div class='card-footer'>
                            <div class='text-center mt-0'><h5>LKR $price</h5></div>
                            <div class='text-center mt-2'>
                                <button pid='$pro_id' class='product btn btn-outline-success btn-sm m-1'>Add to Cart</button>
                                <button pid='$pro_id' class='quicklook btn btn-outline-dark btn-sm m-1'>Quick look</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }
}
#display products

if (isset($_POST['get_selected_Category']) || isset($_POST['get_selected_brand']) || isset($_POST['search']) || isset($_POST['price_sorted'])) {
    if (isset($_POST['get_selected_Category'])) {
        $cid = $_POST['cat_id'];
        $sql = "SELECT * FROM products WHERE product_cat=$cid";
    } elseif (isset($_POST['get_selected_brand'])) {
        $bid = $_POST['brand_id'];
        $sql = "SELECT * FROM products WHERE product_brand=$bid";
        if (isset($_POST['price_sorted'])) {
            $sql = "SELECT * FROM products ORDER BY product_price";
        }
    } elseif (isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%' OR product_title LIKE '%$keyword%'" ;
        if (isset($_POST['price_sorted'])) {
            $sql = "SELECT * FROM products ORDER BY product_price";
        }
    }
    $run_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $brand = $row['product_brand'];
        $title = $row['product_title'];
        $price = $row['product_price'];
        $img = $row['product_image'];

        echo "<div class='col-12 col-md-6 col-lg-4 mb-2'>
                    <div class='card card-info'>
                        <div class='card-header text-center'><b>$title</b></div>
                        <div class='card-body mb-0 text-center'>
                            <a href='#' class='imageproduct text-center' pid='$pro_id'>
                                <img src='assets/prod_images/$img' class='card-img-top text-center img-fluid' alt='Product Image' style='width:200px; height:200px;'>
                            </a>
                        </div>
                        <div class='card-footer'>
                            <div class='text-center mt-0'><h5>LKR $price</h5></div>
                            <div class='text-center mt-2'>
                                <button pid='$pro_id' class='product btn btn-outline-success btn-sm m-1'>Add to Cart</button>
                                <button pid='$pro_id' class='quicklook btn btn-outline-dark btn-sm m-1'>Quick look</button>
                            </div>
                        </div>
                    </div>
                </div>";
                
    }
}

#add to cart
if (isset($_POST['addToProduct'])) {
    if (!(isset($_SESSION['uid']))) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Hey there!</strong> Sign in to buy stuff!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        ";
    } else {
        $pid = $_POST['proId'];
        $uid = $_SESSION['uid'];
        $sql = "SELECT * FROM cart WHERE p_id = '$pid' AND user_id = '$uid'";
        $run_query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($run_query);
        if ($count > 0) {
            echo "<div class='alert alert-danger' role='alert'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    <strong>Success!</strong> Already added!
                </div>
            ";
        } else {
            $sql = "SELECT * FROM products WHERE product_id = '$pid'";
            $run_query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($run_query);
            $id = $row["product_id"];
            $pro_title = $row["product_title"];
            $pro_image = $row["product_image"];
            $pro_price = $row["product_price"];


            $sql = "INSERT INTO cart(p_id,ip_add,user_id,product_title,product_image,qty,price,total_amount) VALUES('$pid','0.0.0.0','$uid','$pro_title','$pro_image','1','$pro_price','$pro_price')";
            $run_query = mysqli_query($conn, $sql);
            if ($run_query) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Success!</strong> Product added to cart!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
            }
        }
    }
}
#add to cart

#profile cart
if (isset($_POST['cartmenu']) || isset($_POST['cart_checkout'])) {
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM cart WHERE user_id='$uid'";
    $run_query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($run_query);
    if ($count > 0) {
        $i = 1;
        $total_amt = 0;
        while ($row = mysqli_fetch_array($run_query)) {
            $sl = $i++;
            $pid = $row['p_id'];
            $product_image = $row['product_image'];
            $product_title = $row['product_title'];
            $product_price = $row['price'];
            $qty = $row['qty'];
            $total = $row['total_amount'];
            $price_array = array($total);
            $total_sum = array_sum($price_array);
            $total_amt += $total_sum;

            if (isset($_POST['cartmenu'])) {
                echo "<div class='row'>
						<div class='col-md-3'>$sl</div>
						<div class='col-md-3'><img src='assets/prod_images/$product_image' width='60px' height='60px'></div>
						<div class='col-md-3'>$product_title</div>
						<div class='col-md-3'>Rs $product_price</div>
				    </div>";
            } else {
                echo "<div class='row'>
                        <div class='col-md-2'>
                            <a href='#' remove_id='$pid' class='btn btn-danger remove'><i class='bi bi-trash'></i></a>
                            <a href='#' update_id='$pid' class='btn btn-success update'><span class='fa fa-edit'></span></a>
                        </div>
                        <div class='col-md-2'>
                            <img src='assets/prod_images/$product_image' class='img-fluid' alt='Product Image' style='max-width: 60px; max-height: 60px;'>
                        </div>
                        <div class='col-md-2'>$product_title</div>
                        <div class='col-md-2'>
                            <input class='form-control price' type='text' size='10' pid='$pid' id='price-$pid' value='$product_price' disabled>
                        </div>
                        <div class='col-md-2'>
                            <input class='form-control qty' type='text' size='10' pid='$pid' id='qty-$pid' value='$qty'>
                        </div>
                        <div class='col-md-2'>
                            <input class='total form-control price' type='text' size='10' pid='$pid' id='amt-$pid' value='$total' disabled>
                        </div>
                    </div>";
            }
        }

        if (isset($_POST['cart_checkout'])) {
            echo "<div class='row'>
                    <div class='col-md-9'></div>
                    <div class='col-md-3' style='font-size:large;'>
                        <b>Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LKR $total_amt</b>
                    </div>
                </div>";
        }
    }
}
#profile cart

#remove from cart
if (isset($_POST['removeFromCart'])) {
    $pid = $_POST['pid'];
    $uid = $_SESSION['uid'];
    $sql = "DELETE FROM cart WHERE p_id='$pid' AND user_id='$uid'";
    $run_query = mysqli_query($conn, $sql);
    if ($run_query) {
        echo "<div class='alert alert-success' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Success!</strong> Item removed from the cart!
            </div>";
    }
}
#remove from cart

#update from cart
if (isset($_POST['updateProduct'])) {
    $pid = $_POST['updateId'];
    $uid = $_SESSION['uid'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $sql = "UPDATE cart SET qty='$qty', price='$price', total_amount='$total' WHERE p_id='$pid' AND user_id='$uid'";
    $run_query = mysqli_query($conn, $sql);
    if ($run_query) {
        echo "
				<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Item updated!
				</div>
			";
    }
}
#update from cart

if (isset($_POST['cartcount'])) {
    if (!(isset($_SESSION['uid']))) {
        echo "0";
    } else {
        $uid = $_SESSION['uid'];
        $sql = "SELECT * FROM cart WHERE user_id='$uid'";
        $run_query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($run_query);
        echo $count;
    }
}

#cart payment
if (isset($_POST['payment_checkout'])) {
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM cart WHERE user_id='$uid'";
    $run_query = mysqli_query($conn, $sql);
    $i = rand();
    while ($cart_row = mysqli_fetch_array($run_query)) {
        $cart_prod_id = $cart_row['p_id'];
        $cart_prod_title = $cart_row['product_title'];
        $cart_qty = $cart_row['qty'];
        $cart_price_total = $cart_row['total_amount'];

        $sql2 = "INSERT INTO customer_order (uid,pid,p_name,p_price,p_qty,p_status,tr_id) VALUES ('$uid','$cart_prod_id','$cart_prod_title','$cart_price_total','$cart_qty','CONFIRMED','$i')";
        $run_query2 = mysqli_query($conn, $sql2);
    }
    $i++;
    $sql3 = "DELETE FROM cart WHERE user_id='$uid'";
    $run_query3 = mysqli_query($conn, $sql3);
}
#cart payment

#product details
if (isset($_POST['product_detail'])) {
    $pid = $_POST['pid'];
    $sql = "SELECT * FROM products WHERE product_id='$pid'";
    $run_query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($run_query);
    $pro_id = $row['product_id'];
    $image = $row['product_image'];
    $title = $row['product_title'];
    $price = $row['product_price'];
    $desc = $row['product_desc'];
    $tags = $row['product_keywords'];

    echo "<div class='row'>
            <div class='col-md-6 order-md-last'>
                <img src='assets/prod_images/$image' style='width:250px;height:250px;' class='img-fluid'>
            </div>
            <div class='col-md-6'>
                <div class='row'>
                    <div class='col-md-12'>
                        <h2>$title</h2>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        Price:<h5 class='text-muted'>$price</h5>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        Description:<h6 class='text-muted'>$desc</h6>
                    </div>
                </div>
                <br><br>
                <div class='row'>
                    <div class='col-md-12'>
                        Tags:<h6 class='text-muted'>$tags</h6>
                     </div>
                </div>
                <button pid='$pro_id' class='product btn btn-outline-success'>Add to Cart</button>
            </div>
        </div>
    ";
}
#product details