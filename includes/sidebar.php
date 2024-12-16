<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu start -->
	<div class="panel-heading"> <!-- panel-heading start -->
		<h3 panel-title>Product Categories</h3>
	</div> <!-- panel-heading End -->
	<div class="panel-body"> <!-- panel-body start -->
		<ul class="nav nav-pills nav-stacked category-menu"> <!-- nav nav-pills nav-stacked category-menu start -->
			<?php
				getPCats();
			?>
		</ul> <!-- nav nav-pills nav-stacked category-menu End -->
	</div> <!-- panel-body End -->
</div> <!-- panel panel-default sidebar-menu End -->


<div class="panel panel-default sidebar-menu"> <!-- panel panel-default sidebar-menu start -->
	<div class="panel-heading"> <!-- panel-heading start -->
		<h3 panel-title>Categories</h3>
	</div> <!-- panel-heading End -->
	<div class="panel-body"> <!-- panel-body start -->
		<ul class="nav nav-pills nav-stacked category-menu"> <!-- nav nav-pills nav-stacked category-menu start -->
			<?php
				getCat();
			?>
		</ul> <!-- nav nav-pills nav-stacked category-menu End -->
	</div> <!-- panel-body End -->
</div> <!-- panel panel-default sidebar-menu End -->