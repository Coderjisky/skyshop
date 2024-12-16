<div id="Footer"> <!-- Footer start --> 
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 -->
                <h4> Pages </h4>
                <ul>
                    <li> <a href="../cart.php">Shopping Cart</a> </li>
                    <li> <a href="../Contact.php">Contact Us</a> </li>
                    <li> <a href="../shop.php">Shop</a> </li>
                    <li> <a href="My_account.php">My Account</a> </li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li> <a href="My_account.php">Login</a> </li>
                    <li> <a href="../customer_registration.php">Register</a> </li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div> <!-- col-md-3 col-sm-6 -->
            <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 start-->
                <h4>Top Product Categories</h4>
                <ul>
                                        
<?php 

$get_p_cats="select * from product_categoris";
$run_p_cats=mysqli_query($con,$get_p_cats);
while ($row_p_cat=mysqli_fetch_array($run_p_cats)) {
    $p_cat_Id=$row_p_cat['p_cat_Id'];
    $p_cat_title=$row_p_cat['p_cat_title'];
    echo "<li> <a href='shop.php?p_cat=p_cat_Id'>$p_cat_title</a> </li>";
}

 ?>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div> <!-- col-md-3 col-sm-6 End -->

            <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 start-->
                <h4>Where to find us </h4>
                <p>
                    <strong></strong>
                    <br>Sky
                    <br>Pakaha
                    <br>Uttar Pradesh
                    <br>codersky23@gmail.com
                    <br>+91 7275070342
                </p>
                <a href="contact.php">Goto contact us page</a>
                <hr class="hidden-md hidden-lg">
            </div> <!-- col-md-3 col-sm-6 End -->

            <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 start-->
                <h4> Get the news </h4>
                <p class="text-muted">
                    Subscribe here for getting news of ICSRLAB Ayodhya
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control">
                        <span class="input-group-btn">
                            <input type="submit" name="" class="btn btn-default" value="Subscribe">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Stay In Touch</h4>
                <p class="social">
                    <a href="#"> <i class="fa-brands fa-facebook"></i> </a>
                    <a href="#"> <i class="fa-brands fa-twitter"></i> </a>
                    <a href="#"> <i class="fa-brands fa-instagram"></i> </a>
                    <a href="#"> <i class="fa-brands fa-google-plus"></i> </a>
                    <a href="#"> <i class="fa-solid fa-envelope"></i> </a>
                </p>
            </div> <!-- col-md-3 col-sm-6 End -->
        </div>
    </div>
</div> <!-- Footer end -->


<div id="copyright"><!-- copyright start -->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2024 Er Coder SKY
            </p>
        </div> 
        <div class="col-md-6">
            <p class="pull-right">
                Tamplate By: <a href="www.Teehosting.com">Teehosting.com</a>
            </p>
        </div>
    </div>
</div> <!-- copyright End -->
