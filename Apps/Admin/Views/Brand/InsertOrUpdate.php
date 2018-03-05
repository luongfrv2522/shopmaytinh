<?php 
	$dis = '';
	$act = "Thêm";
	
	$BrandId = 0;
	$BrandName = '';
	$Description = 'Không có mô tả';
	$Image = ImageDefault;
	$Status = '';

	$_DataResult = BaseClass::GetValuePost('_DataResult');
	if($_DataResult != false){
		$BrandId = $_DataResult->BrandId;
		$BrandName = $_DataResult->BrandName;
		$Description = $_DataResult->Description;
		$Image = $_DataResult->Image;
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
				<label>Tên hãng sản phẩm</label>
				<input id="brandname" class="form-control" type="text" maxlength="50" minlength="6" required value="<?=$BrandName?>">
			</div>
			<div class="form-group">
				<label>Trạng thái</label>
				<select id="status" class="form-control" value="<?=$Status?>">
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng </option>
                </select>
			</div>
            <div class="form-group" required>
                <label>Mô tả</label>
                <textarea name="ckeditor" id="description" class="form-control" rows="9" minlength="10"><?=$Description?></textarea>
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
		//debugger;
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
		debugger;
		var id = <?=$BrandId?>;
		var brandname = $("#brandname").val();
		//var description = $("#description").val();
		var description = CKEDITOR.instances.description.getData();

		//console.log(CKEDITOR.instances.description.getData());
		

		var status = $("#status").val();

		var image = $('#file').attr('url');
		var dataForm={
			BrandId : id,
			BrandName : brandname,
			Description : description,
			Status : status,
			Image : image,
		};

		$.ajax({
			//async: false,
			url: 'Admin/Brand/InsertOrUpdate',			
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
	$(function() {$("#status").val(<?=$Status?>);});
</script>
<!--  -->