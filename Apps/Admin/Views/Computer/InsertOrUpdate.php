<?php 
	$dis = '';
	$act = "Thêm";
	$rs = BaseClass::GetValuePost('_DataResult');
	$ListBrand = $rs->DataBrand;	 ;
	$ComId = 0;
	$ComName = '';
	$Description = 'Không có mô tả';
	$Image = ImageDefault;
	$Price = '';
	$BrandId = '';
	$BrandName = '';
	$Status = '';
	$Posistion = 0;

	$_DataResult = $rs->DataCom;
	if($_DataResult != false){
		$ComId = $_DataResult->ComId;
		$ComName = $_DataResult->ComName;
		$Description = $_DataResult->Description;
		$Image = $_DataResult->Image;
		$Price = $_DataResult->Price;
		$BrandId = $_DataResult->BrandId;
		$BrandName = $_DataResult->BrandName;
		$Posistion = $_DataResult->Posistion;
		$Status = $_DataResult->Status;

		$act = "Cập nhật";
		$dis = "display: none";
	}

?>
<div class="panel panel-info">
	<div class="panel-heading">
		<?=$act?> Sản phẩm
	</div>
	<div class="panel-body">
		<form id="formInsert" role="form">
			<div class="form-group">
				<label>Tên sản phẩm</label>
				<input id="comname" class="form-control" type="text" maxlength="50" minlength="6" required value="<?=$ComName?>">
			</div>

			
			<div class="form-group">
				<label>Giá</label>
				<input id="price" class="form-control" type="number" step="1000" min="1000" value="<?=$Price?>" required>
			</div>
			<div class="form-group">
				<label>Trạng thái</label>
				<select id="status" class="form-control" value="<?=$Status?>">
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng </option>
                </select>
			</div>
			<div class="form-group">
                <label>Hãng</label>
                <select id="brandid" class="form-control" values="<?=$BrandId?>">
                    <?php foreach ($ListBrand as $key): ?>
                	<option value="<?=$key->BrandId?>"><?=$key->BrandName?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
				<label>Điểm Ưu tiên vị trí</label>
				<input id="posistion" class="form-control" type="number" step="1" min="0" value="<?=$Posistion?>" required>
			</div>
            <div class="form-group" required>
                <label>Mô tả</label>
                <textarea id="description" class="form-control" rows="9" minlength="10"><?=$Description?></textarea>
                 <script>CKEDITOR.replace('description');</script>
            </div>
            <div class="form-group">
	            <label class="control-label col-lg-2">Ảnh đại diện</label>
	            <input class="form-control" type="file" id="file" name="Image" url="<?=$Image?>">
	            <hr>
	        </div>
			<button id="submitInsert" type="submit" class="btn btn-info"><?=$act?> </button>

		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#formInsert").submit(function(event){
			//event.preventDefault();
			//
			SendUploadAjax();
			InsertAjax();
			//
			//return false;
		});
	});
	function SendUploadAjax() {
		var resultData;
		var form_data = new FormData();
		debugger;
		var file_data = $('#file').prop('files')[0];//$('[id của input file]').prop('files')[0];
		form_data.append('file',file_data);//Bắt buộc để tên là file
		if(file_data != undefined){
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
					console.log(result);
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
		}
	}
	function InsertAjax(){
		//debugger;
		var id = <?=$ComId?>;
		var comname = $("#comname").val();
		var description = CKEDITOR.instances.description.getData();
		var price = $("#price").val();
		var status = $("#status").val();
		var brandid = $("#brandid").val();
		var posistion = $("#posistion").val();


		var image = $('#file').attr('url');
		var dataForm={
			ComId : id,
			ComName : comname,
			Description : description,
			Price : price,
			Status : status,
			BrandId : brandid,
			Posistion : posistion,
			Image : image,
		};

		$.ajax({
			//async: false,
			url: 'Admin/Computer/InsertOrUpdate',			
			type: 'POST',
			dataType: 'HTML',
			data: dataForm,
			success: function (result) {
				//debugger;
				alert(result);
				location.reload();

			},
			error : function(error){
				alert("Lỗi Ajax");
			}
		});
	}
</script>
<!--  -->
<script type="text/javascript">
	$(function() {$("#brandid").val(<?=$BrandId?>);});
	$(function() {$("#status").val(<?=$Status?>);});
</script>
<!--  -->