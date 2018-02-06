<?php  
	$name = "";
	$desc = "";
	$image = "";
	$price = "";
	$status = "";
	$brand_id = "";
	$posistion = "";
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

	<h2>Nhập thông tin</h2>

	<div>
		<form method="POST">
			Tên thể loại sản phẩm:</br>
			<input type="text" id="Name" name="Name" value="<?=$name?>"><br><br>
			Mô tả thể loại sản phẩm:<br>
			<input type="text" id="Desc" name="Desc" value="<?=$desc?>"><br><br>
			Giá sản phẩm:<br>
			<input type="number" id="Price" name="Price" value="<?=$price?>"><br><br>
			Trạng thái sản phẩm:<br>
			<input type="number" id="Status" name="Status" value="<?=$status?>"><br><br>
			Hãng sản phẩm:<br>
			<input type="number" id="Brand_id" name="Brand_id" value="<?=$brand_id?>"><br><br>
			Vị trí sản phẩm:<br>
			<input type="number" id="Posistion" name="Posistion" value="<?=$posistion?>"><br><br>

			<input type="file" id="Image" name="Image" value="<?=$image?>"><br><br>
			<input type="submit" name="Submit" >
			<input type="reset" name="">
		</form>
	</div>
	<a href="Home/List">Back</a>

<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function(){
			InsertAjax();


			return false;
		});
	});

	function InsertAjax() {
		var name = $('#Name').val();
		var desc = $('#Desc').val();
		var price = $('#Price').val();
		var status = $('#Status').val();
		var brand_id = $('#Brand_id').val();
		var posistion = $('#Posistion').val();
		var image_url = "TamThoi";
		
		var dataForm={
			Name : name,
			Desc : desc,
			Price : price,
			Status : status,
			BrandId : brand_id,
			Posistion : posistion,
			ImageUrl : image_url,
		};

		$.ajax({
			url: 'Home/InsertOrUpdatePost',
			type: 'POST',
			dataType: 'HTML',
			data: dataForm,
			success: function (result) {
				alert(result);
			}
		});
	}
</script>
