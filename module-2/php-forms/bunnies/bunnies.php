<?php 

	// Set to apply active Bootstrap class to nav link
	$active_page = "Breeds";
	require_once "res/bunny-template.php";

?>

<!-- container for display controls -->
<div class="clearfix" id="bunny-display-controls">

	<form method="POST" class="form-group clearfix">

		<select name="category" class="form-control">

			<option value="all">All</option>

			<?php

				$categories = array_unique(array_column($bunnies, 'category'));

				foreach ($categories as $category) {
					if (isset($_POST['category']) && ($_POST['category'] == $category)) {
						print_category($category, true);
					} else {
						print_category($category, false);
					}
				}

			?>

		</select>
				
		<input type="submit" class="btn btn-primary" name="submit_category" value="Filter">

	</form>
</div> <!-- /container for display controls -->

<?php 

	print_all_bunnies($bunnies); 

?>

<?php require_once "res/footer.php"; ?>