<?php
include("includes/db.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INSERT PRODUCT</title>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>


<div class="row"> <!-- row start -->
	<div class="col-lg-12"> <!-- col-lg-12 start -->
		<div class="breadcrumb"> <!-- breadcrumb start -->
			<li class="active">
				<i class="fa fa-dashboard"></i>
				Dashboard / Insert Product
			</li>
		</div> <!-- breadcrumb End -->
	</div> <!-- col-lg-12 End -->
</div> <!-- row End -->

<div class="row"> <!-- row start -->
	<div class="col-lg-3">
		
	</div>
	<div class="col-lg-6"> <!-- col-lg-6 start -->
		<div class="panel panel-default"> <!-- panel panel-default start -->
			<div class="panel-heading"> <!-- panel-heading start -->
				<h3 class="panel-title">
					<i class="fa a-money fa-w"></i> Insert Product
				</h3>
			</div> <!-- panel-heading End -->
			<div class="panel-body"><!-- panel-body start -->
				<form class="form-horizontal" method="post" action="" enctype="multipart-form-data">
					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Title</label>
						<input type="text" name="product_title" class="form-control" required="">
					</div> <!-- form-group End -->


					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Category</label>
						<select name="product_cat" class="form-control">
							<option>Select a product category</option>

							<?php
	$get_p_cats="select * from product_categoris";
	$run_p_cats=mysqli_query($con,$get_p_cats);
	while ($row=mysqli_fetch_array($run_p_cats)) {
		$id=$row['p_cat_id'];
		$cat_title=$row['p_cat_title'];
		 echo "<option value='$id'>$cat_title</option>";
	}

							?>
						</select>
					</div> <!-- form-group End -->


			<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Category</label>
					<select name="cat" class="form-control">
						<option>Select Categories</option>
						<?php
	$get_cats="select * from categori";
	$run_cats=mysqli_query($con,$get_cats);
	while ($row=mysqli_fetch_array($run_cats)) {
		$cat_Id=$row['cat_id'];
		$cat_title=$row['cat_title'];
		 echo "<option value='$cat_Id'>$cat_title</option>";
	}
							?>
					</select>
					</div> <!-- form-group End -->


					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Image 1</label>
						<input type="file" name="product_img1" class="form-control" required="">
					</div> <!-- form-group End -->


					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Image 2</label>
						<input type="file" name="product_img2" class="form-control" required="">
					</div> <!-- form-group End -->


					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Image 3</label>
						<input type="file" name="product_img3" class="form-control" required="">
					</div> <!-- form-group End -->

					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product price</label>
						<input type="text" name="product_price" class="form-control" required="">
					</div> <!-- form-group End -->


					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Keyword</label>
						<input type="text" name="product_keyword" class="form-control" required="">
					</div> <!-- form-group End -->



					<div class="form-group"><!-- form-group start -->
						<label class="col-md-3 control-label">Product Description</label>
						<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
					</div> <!-- form-group End -->

					<div class="form-group">
						<input type="submit" name="submit" value="Insert product" class="btn btn-primary form-control">
					</div>

				</form>
			</div> <!-- panel-body End -->
		</div> <!-- panel panel-default End -->
	</div> <!-- col-lg-6 End -->
	<div class="col-lg-3">
		
	</div>
</div> <!-- row End -->



<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$cat=$_POST['cat'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keyword=$_POST['product_keyword'];

	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];

	$temp_name1=$_FILES['product_img1']['temp_name'];
	$temp_name2=$_FILES['product_img2']['temp_name'];
	$temp_name3=$_FILES['product_img3']['temp_name'];

	move_uploaded_file($temp_name1, "product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");


	$inset_product="insert into products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword) values('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword')";

	$run_product=mysqli_query($con,$inset_product);

	if ($run_product) {
		echo "<script>alert('Product Inserted Successfully')</script>";

		echo "<script>window.open('insert_product.php');</script>";
	}

}


?>