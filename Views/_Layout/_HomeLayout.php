
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ShopMayTinh</title>
	<?php 
		require "Content/Css/Common.php"; 
		require "Content/Scripts/Common.php";
	?>
</head>
<body>
	<div class="loading"></div>
	<h2>Chào User</h2>
	<!-- BEGIN BODY LAYOUT -->
	<?php 
		//echo $body
		$body = new $_controller($_action);
	?>
	<!-- END BODY LAYOUT -->
</body>
<script type="text/javascript">
	$(document).ready(function() {
		//alert("Scripts hoạt động!");
	});
</script>
</html>
<?php exit(); ?>