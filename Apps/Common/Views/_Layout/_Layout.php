
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ShopMayTinh</title>
	<base href="<?=BaseURI::getBaseURL()?>/Admin">
    <!-- JQUERY SCRIPTS -->
	<?php PublicLoader::Load('Content/Scripts/Common.php');?>
    <!-- BOOTSTRAP STYLES-->
    <link href="Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="Public/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="Public/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body style="background-color: #E2E2E2;">
	<?php  require BaseClass::GetSession('_pageBody'); ?>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="Public/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="Public/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="Public/assets/js/custom.js"></script>
    
</body>
</html>
<?php exit(); ?>