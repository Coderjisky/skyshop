<div class="panel panel-default"> <!-- panel panel-default start -->
	<div class="panel-heading"><!-- panel-heading start -->
		<center>
			<img src="https://pakaha.com/img/jutti5.jpg" class="img-responsive">
		</center>
		<br>
		<h3 align="center" class="panel-title">Name:SKY</h3>
	</div><!-- panel-heading End -->
	<div class="panel-body"><!-- panel-body start -->
		<ul class="nav nav-pills nav-stacked">
			<li class="<?php if (isset($_GET["my_order"])){echo "active";}?>">
				<a href="My_account.php?my_order">
					<i class="fa-solid fa-list"></i>  MY Order </a>
			</li>

			<li class="<?php if (isset($_GET["pay_offline"])){echo "active";}?>">
				<a href="My_account.php?pay_offline">
					<i class="fa-solid fa-bolt"></i>  Pay Offline</a>
			</li>

			<li class="<?php if (isset($_GET["my_address"])){echo "active";}?>">
				<a href="My_account.php?my_address">
					<i class="fa-solid fa-user"></i>  My Address</a>
			</li>

			<li class="<?php if (isset($_GET["edit_act"])){echo "active";}?>">
				<a href="My_account.php?edit_act">
					<i class="fa-solid fa-pen-to-square"></i>  Edit Account</a>
			</li>

			<li class="<?php if (isset($_GET["change_pass"])){echo "active";}?>">
				<a href="My_account.php?change_pass">
					<i class="fa-solid fa-lock"></i>  Change Password</a>
			</li>

			<li class="<?php if (isset($_GET["delete_ac"])){echo "active";}?>">
				<a href="My_account.php?delete_ac">
					<i class="fa-solid fa-trash"></i>  Delete Account</a>
			</li>

			<li class="<?php if (isset($_GET["logout"])){echo "active";}?>">
				<a href="My_account.php?logout">
					<i class="fa-solid fa-sing"></i> Logout</a>
			</li>
		</ul>
	</div> <!-- panel-body End -->
</div> <!-- panel panel-default End -->