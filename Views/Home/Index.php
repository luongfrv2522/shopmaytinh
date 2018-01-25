<?php 
	//PRINT "Views/Home/Index";
	//PRINT var_dump($_DataResult);
	//$key = $_DataResult;
?>

<div class="box-ajax">

</div>

<script type="text/javascript">
	$(document).ready(function() {
		var pageIndex = Pagination.getHashParameter();
		if(pageIndex === ""){
			pageIndex = 1;
		}
		SendPagination(pageIndex);
		//alert(window.location.href);
		//alert(window.location.hash);

		/*BEGIN TEST*/
		
        /*END TEST*/
		$("#formUpload").submit( function(event){
			//alert($(this).parent().html());
			event.preventDefault();
			SendUploadAjax(); 
		});

	});
	
	function SendUploadAjax() {
		var form_data = new FormData();
		var file_data = $('#file').prop('files')[0];
		form_data.append('file',file_data);
		$.ajax({
			url: 'Home/UploadImg',
			type: 'POST',
			dataType: 'json',
			data: form_data,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function (xhr) {
				$(".loading").show();
			},
			success : function(result){
				//console.log(result);
				// console.log(result.Status);
				alert(result.Msg);
				if(result.Status > 0){
					alert(result.Data);
				}
			},
			error : function(error){
				alert("Lỗi Ajax");
			},
			complete: function () {
				$(".loading").hide();
			}
		});
	}

	function SendPagination(pageIndex = 1, pageSize = 4){

		var dataMap = {
			PageIndex : pageIndex,
			PageSize : pageSize
		};

		$.ajax({
			url: 'Home/ListGet',
			type: 'POST',
			dataType: 'html',
			data: dataMap,
			beforeSend: function (xhr) {
				$(".loading").show();
			},
			success : function(result){
				//console.log(result);
				$(".box-ajax").html(result);
				//$(".pagination li a[id="+pageIndex+"]").parent().addClass("active");
			},
			error : function(error){
				alert("Lỗi GetList");
			},
			complete: function () {
				$(".loading").hide();
			}
		});
	}
</script>