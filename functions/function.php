<?php

// Use mysqli_connect() instead of mysql_connect()
$db = mysqli_connect("localhost", "root", "", "shop");


// for geting user ip start

/*function getUserIP(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_X_CLIENT_IP'])) : return $_SERVER['HTTP_X_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}

function addCart(){
    global $db;
    if (isset($_GET['add_cart'])) {
        $ip_add=getUserIP();
        $p_id=$_GET['add_cart'];
        $product_qty=$_POST['product_qty'];
        $product_size=$_POST['product_size'];
        $check_product="select * from cart where ip_add='$ip_add' AND ip_add'$ip_add'";
        $run_check=mysqli_query($db,$check_product);
        if (mysqli_num_rows($run_check)>0) {
            echo "<script> alert('This Product is already addedin cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }else{
            $query="insert into cart(p_id,ip_add,qty,size) values('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query=mysqli_query($db,$query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
         }
    }                           
}*/

function getUserIP() {
    switch(true) {
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_X_CLIENT_IP'])) : return $_SERVER['HTTP_X_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}

function addCart() {
    global $db;

    error_reporting(E_ALL); // Enable error reporting
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['add_cart'])) {
        $ip_add = getUserIP(); // Get user IP
        $p_id = $_GET['add_cart'];

        if (isset($_POST['product_qty']) && isset($_POST['product_size'])) {
            $product_qty = $_POST['product_qty'];
            $product_size = $_POST['product_size'];

            // Correct the query to check for both IP and product ID
            $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
            $run_check = mysqli_query($db, $check_product);

            if (!$run_check) {
                die("Query Failed: " . mysqli_error($db)); // Show query error
            }

            if (mysqli_num_rows($run_check) > 0) {
                echo "<script>alert('This product is already added in cart')</script>";
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            } else {
                // Insert the product into the cart
                $query = "INSERT INTO cart(p_id, ip_add, qty, size) VALUES('$p_id', '$ip_add', '$product_qty', '$product_size')";
                $run_query = mysqli_query($db, $query);

                if (!$run_query) {
                    die("Insert Query Failed: " . mysqli_error($db)); // Show insert error
                }

                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            }
        } else {
            echo "<script>alert('Please select product quantity and size')</script>";
        }
    }
}

//items count start

function item(){
    global $db;
    $ip_add=getUserIP();
    $get_items="select * from cart where ip_add='$ip_add'";
    $run_item=mysqli_query($db,$get_items);
    $count=mysqli_num_rows($run_item);
    echo $count;
}

//items count end

// item price start

function totalPrice(){
    global $db;
    $ip_add=getUserIP();
    $total=0;
    $select_cat="select * from cart where ip_add='$ip_add'";
    $run_cart=mysqli_query($db,$select_cat);
    while ($record=mysqli_fetch_array($run_cart)) {
        $pro_id=$record['p_id'];
        $pro_qty=$record['qty'];
        $get_price="select * from products where product_Id='$pro_id'";
        $run_price=mysqli_query($db,$get_price);
        while ($row=mysqli_fetch_array($run_price)){
        $sub_total=$row['product_price']*$pro_qty;
        $total += $sub_total;
    }
  }

  echo $total; 
}

// item price end


// for geting user ip end

function getPro() {
    global $db; // Corrected global declaration
    
    $get_product = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,6";
    $run_products = mysqli_query($db, $get_product);

    // Fetching products and displaying them
    while ($row_product = mysqli_fetch_array($run_products)) {
        $pro_id = $row_product['product_Id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_img1 = $row_product['product_img1'];

        // Output product information in HTML
        echo "<div class='col-md-4 col-sm-6'>
                <div class='product'>
                    <a href='details.php?pro_id=$pro_id'>
                        <img src='Admin_area/product_images/$pro_img1' class='img-responsive'>
                    </a>
                    <div class='text'>
                        <h3>
                            <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                        </h3>
                        <p class='price'>INR $pro_price</p>
                        <p class='buttons'>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                <i class='fa fa-shopping-cart'></i> Add to cart
                            </a>
                        </p>
                    </div>
                </div>
              </div>";
    }
}



/* Product Categories */

function getPCats(){

global $db;
$get_p_cats="select * from product_categoris";
$run_p_cats=mysqli_query($db,$get_p_cats);
while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
        $p_cat_Id=$row_p_cats['p_cat_Id'];
        $p_cat_title=$row_p_cats['p_cat_title'];
        echo "<li><a href='shop.php?p_cat=$p_cat_Id'>$p_cat_title</a></li>";
    }    
    
}



/* Categories */


function getCat(){
    global $db;
    $get_cat="select * from categori";
    $run_cat=mysqli_query($db,$get_cat);
    while ($row_cat=mysqli_fetch_array($run_cat)) {
        $cat_Id=$row_cat['cat_Id'];
        $cat_title=$row_cat['cat_title'];
        echo "<li><a href='shop.php?cat_Id=$cat_Id'>$cat_title</a></li>";
    }
}



/* Get Product Cotegories product */

function getPcatPro(){
    global $db;

    if (isset($_GET['p_cat'])) {
        $p_cat_Id = $_GET['p_cat'];

        // Get category details
        $get_p_cat = "select * from product_categoris where p_cat_Id='$p_cat_Id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        // Get products from this category
        $get_products = "select * from products where p_cat_Id='$p_cat_Id'";
        $run_products = mysqli_query($db, $get_products);
        $count = mysqli_num_rows($run_products);

        if ($count == 0) {
            echo "
            <div class='box'>
                <h1>No Product Found In This Product Category</h1>
            </div>
            ";
        } else {
            echo "
            <div class='box'>
                <h1> $p_cat_title </h1>
                <p> $p_cat_desc </p>
            </div>
            ";
        }

        while($row_products=mysqli_fetch_array($run_products)){
            $pro_id=$row_products['product_Id'];
            $pro_title=$row_products['product_title'];
            $pro_price=$row_products['product_price'];
            $pro_img1=$row_products['product_img1'];

            echo "
            <div class='col-md-4 col-sm-6 center-responsive'>
    <div class='product'>
        <a href='details.php?pro_id=$pro_id'>
            <img src='Admin_area/product_images/$pro_img1' class='img-responsive'>
        </a>
        <div class='text'>
    <h3><a href='details.php?pro_id'> $pro_title </a></h3>
    <p class='price'>$pro_price</p>
    <p class='button'>
        <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
        <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add To Cart</a>
    </p>
</div>
    </div>
</div>
            ";
        }
    }
}



// GET CATEGORIES

function getCatPro(){
    global $db;
    
    if(isset($_GET['cat_Id'])){
        // SQL injection se bachav ke liye sanitize karte hain
        $cat_Id = mysqli_real_escape_string($db, $_GET['cat_Id']);
        
        // Category details ko fetch karte hain
        $get_cat = "SELECT * FROM categori WHERE cat_Id='$cat_Id'";
        $run_cats = mysqli_query($db, $get_cat);
        $row_cat = mysqli_fetch_array($run_cats);
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        
        // Products ko fetch karte hain jo iss category se jude hain
        $get_products = "SELECT * FROM products WHERE cat_Id='$cat_Id'";
        $run_products = mysqli_query($db, $get_products);
        $count = mysqli_num_rows($run_products);
        
        // Agar products na mile to ye message show karo
        if ($count == 0) {
            echo "
            <div class='box'>
                <h1>No Product Found In This Category</h1>
            </div>
            ";
        } else {
            // Category ka title aur description show karte hain
            echo "
            <div class='box'>
                <h1> $cat_title </h1>
                <p> $cat_desc </p>
            </div>
            ";
        }

        // Products ko loop karke display karte hain
        while($row_products = mysqli_fetch_array($run_products)){
            $pro_id = $row_products['product_Id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];

            echo "
            <div class='col-md-4 col-sm-6 center-responsive'>
                <div class='product'>
                    <a href='details.php?pro_id=$pro_id'>
                        <img src='Admin_area/product_images/$pro_img1' class='img-responsive'>
                    </a>
                    <div class='text'>
                        <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                        <p class='price'>$$pro_price</p>
                        <p class='button'>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                <i class='fa fa-shopping-cart'></i> Add To Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        // Agar cat_Id set nahi hai to ek fallback message ya error message de
        echo "<div class='box'><h1>No Category Selected</h1></div>";
    }
}

?>
