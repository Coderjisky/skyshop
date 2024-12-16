<div class="box"><!-- box start -->
	<div class="box-header"><!-- box-header start -->
		<center>
			<h2>Login</h2>
			<p class="lead">Already our customer</p>
		</center>
	</div><!-- box-header end -->
	<form action="checkout.php" method="post">
		<div class="form-group">
			<label>Email: </label>
			<input type="text" name="c_email" class="form-control" required="">
		</div>

		<div class="form-group">
			<label>Password: </label>
			<input type="password" name="c_pass" class="form-control" required="">
		</div>

		<div class="text-center"><!-- text-center start -->
			<button class="btn btn-primary" value="login" name="login">
				<i class="fa fa-sign-in"></i>Log 
			</button>
		</div><!-- text-center End -->
	</form>
	<center>
		<a href="customer_registration.php">
			<h3>New ? Register Now</h3>
		</a>
	</center>
</div><!-- box start -->


<?php
if(isset($_POST['Login'])){
	
}
?>