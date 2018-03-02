<?php 
	$dis = '';
	$act = "Thêm";
	$UserId = 0;
	$FullName = '';
	$UserName = '';
	$Image = '';
	$Admin = '';
	$Password = '';
	$_DataResult = BaseClass::GetValuePost('_DataResult');
	if($_DataResult != false){
		$UserId = $_DataResult->UserId;
		$FullName = $_DataResult->FullName;
		$UserName = $_DataResult->UserName;
		$Image = $_DataResult->Image;
		$Admin = $_DataResult->Permission;
		$Password = $_DataResult->Password;

		$act = "Cập nhật";
		$dis = "display: none";
	}

?>
<div class="panel panel-info">
	<div class="panel-heading">
		<?=$act?> Tài khoản
	</div>
	<div class="panel-body">
		<form id="formInsert" role="form">
			<div class="form-group">
				<label>Tên đăng nhập</label>
				<input id="user" class="form-control" type="text" maxlength="50" minlength="6" value="<?=$UserName?>">
			</div>

			<div class="form-group" style="<?=$dis?>">
				<label>Mật khẩu</label>
				<input id="pass" class="form-control" type="password" minlength="6" maxlength="50" value="<?=$Password?>" >
			</div>
			
			<div class="form-group">
				<label>Tên đầy đủ</label>
				<input id="name" class="form-control" type="text" maxlength="255" minlength="1" value="<?=$FullName?>">
			</div>
			<div class="form-group">
                <label>Loại tài khoản</label>
                <select id="Per" class="form-control" value="<?=$Admin?>">
                    <option value="0"> Người mua hàng </option>
                    <option value="2">Admin</option>
                </select>
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
		$("#submitInsert").click(function(event){
			//event.preventDefault();
			SendUploadAjax();
			InsertAjax();
			//return false;
		});
	});
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
	function InsertAjax(){
		//debugger;
		var id = <?=$UserId ?>;
		var user = $("#user").val();
		var pass = $("#pass").val();
		var fullname = $("#name").val();
		var permission = $("#Per").val();
		var image = $('#file').attr('url');
		var dataForm={
			UserId : id,
			UserName : user,
			Password : pass,
			FullName : fullname,
			Permission : permission,
			Image : image,
		};

		$.ajax({
			url: 'Admin/UserMger/InsertOrUpdate',
			type: 'POST',
			dataType: 'HTML',
			data: dataForm,
			success: function (result) {
				//debugger;
				alert(result);
			}
		});
	}
</script>