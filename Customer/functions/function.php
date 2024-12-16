<?php

// Use mysqli_connect() instead of mysql_connect()
$db = mysqli_connect("localhost", "root", "", "shop");

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
?>
