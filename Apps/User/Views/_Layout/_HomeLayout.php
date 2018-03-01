
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ShopMayTinh</title>
	<base href="<?=BaseURI::getBaseURL()?>/">
	<?php 
		PublicLoader::Load("Content/Css/Common.php");
		PublicLoader::Load("Content/Scripts/Common.php");
	?>
</head>
<body>
	<div class="container">
		<div class="loading"></div>
		<h2>Chào User</h2>
		<!-- BEGIN BODY LAYOUT -->
		<?php 
			//echo $body
			require BaseClass::GetSession('_pageBody');
		?>
		<!-- END BODY LAYOUT -->
	</div>
</body>
</html>
<?php exit(); ?>