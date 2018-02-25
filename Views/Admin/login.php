<div class="container">
	<div class="row text-center " style="padding-top:100px;">
		<div class="col-md-12">
			<img src="Content/Images/Admin_logo.png" style="width: 24%;" />
		</div>
	</div>
	<div class="row ">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel-body">
				<form role="form">
					
					<hr style="border-bottom: 1px solid #251616;"/>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-user"  ></i></span>
						<input id="user" type="text" class="form-control" placeholder="Nhập tài khoản" />
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
						<input id="pass" type="password" class="form-control"  placeholder="Nhập mật khẩu" />
					</div>
					<input type="submit" href="index.html" class="btn btn-primary " value="Đăng nhập" />
				</form>
				<div id="error_msg" class="alert alert-danger" style="display: none;"></div>
				<hr />
				<a href="index.html" >Đăng ký </a> hoặc tới <a href="Home/Index">Trang chủ</a> 
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('form').on('submit', function(event) {
		event.preventDefault();
		SendLoginAjax();
	});


});

	function SendLoginAjax(){
		//alert("<?php echo $_SESSION['login'] ?>");
		$.ajax({
			url: 'Admin/Login/LoginPost',
			type: 'POST',
			dataType: 'json',
			data: {
				user: $('#user').val(),
				pass: $('#pass').val(),
			},
			beforeSend: function (xhr) {
				$(".loading").show();
			},
			success: function(result){
				console.log(result);
				if(result.Status < 0){
					$("#error_msg").text("Tài khoản hoặc mật khẩu không đúng!").fadeIn("fast").fadeOut(2500);
				}else{
					location.reload();
				}
			},
			error: function(error){
				console.log("error: " + error);
			},
			complete: function () {
				$(".loading").hide();
			}
		});
	}
</script>