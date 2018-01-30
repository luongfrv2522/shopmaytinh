
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ShopMayTinh</title>
	<base href="<?=BaseURI::getBaseURL()?>shopmaytinh/">
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
</html>
<?php exit(); ?>