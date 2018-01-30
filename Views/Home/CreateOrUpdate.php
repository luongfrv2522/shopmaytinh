<?php  
	$com_name = "";
	$desc = "";
	$desc = "";
	$desc = "";
	$desc = "";
	$desc = "";
	$desc = "";
	if($_DataResult != false){
			$name = $_DataResult->ComName;
			$desc = $_DataResult->Description;
			$image = $_DataResult->Image;
			$price = $_DataResult->Price;
			$status = $_DataResult->Status;
			$brand_id = $_DataResult->BrandId;
			$posistion = $_DataResult->Posistion;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Or Update</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Nhập thông tin</h2>

	<div style="">
		<form method="POST">
			Tên thể loại sản phẩm:</br>
			<input type="text" name="Name" value="<?=$cate_name?>"><br><br>
			Mô tả thể loại sản phẩm:<br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="text" name="Desc" value="<?=$cate_desc?>"><br><br>
			<input type="submit" name="Submit" >
			<input type="reset" name="">
		</form>
	</div>
	<a href="index.php">Back</a>
</body>
</html>