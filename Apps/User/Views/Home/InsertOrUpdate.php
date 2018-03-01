<?php  
	$name = "";
	$desc = "";
	$image = "";
	$price = "";
	$status = "";
	$brand_id = "";
	$posistion = "";
	$_DataResult = BaseClass::GetValuePost('_DataResult');
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

			<div><img src="<?=$image?>"></div>
			<input type="file" id="file" name="Image" url=""><br><br>
			<input type="submit" name="Submit" >
			<input type="reset" name="">
		</form>
	</div>
	<a href="/shopmaytinh/Home/List">Back</a>

<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function(event){
			event.preventDefault();
			SendUploadAjax();
			InsertAjax();
			//return false;
		});
	});

	function InsertAjax() {
		var name = $('#Name').val();
		var desc = $('#Desc').val();
		var price = $('#Price').val();
		var status = $('#Status').val();
		var brand_id = $('#Brand_id').val();
		var posistion = $('#Posistion').val();
		var image_url = $('#file').attr('url');
		
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

	function SendUploadAjax() {
		var resultData;
		var form_data = new FormData();
		var file_data = $('#file').prop('files')[0];//$('[id của input file]').prop('files')[0];
		form_data.append('file',file_data);//Bắt buộc để tên là file
		$.ajax({
			async: false,//Tắt bất đồng bộ của AJAX
			url: 'Home/UploadImg',
			type: 'POST',
			dataType: 'json',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			enctype: "multipart/form-data",
			beforeSend: function (xhr) {
				$(".loading").show();
			},
			success : function(result){
				//console.log(result);
				// console.log(result.Status);
				//alert(result.Msg);
				if(result.Status > 0){
					//alert(result.Data);
					$('#file').attr('url',result.Data);
				}
				resultData = result;
			},
			error : function(error){
				alert("Lỗi Ajax");
			},
			complete: function () {
				$(".loading").hide();
			}
		});

		return resultData;
	}
</script>

