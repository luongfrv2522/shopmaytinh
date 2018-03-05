<?php 
    $idPass = isset($_GET["id"])?$_GET["id"]:0; 
?>

	<div id="main">
		<div id="datajax" class="products">
			
		</div>
			<div id="pagination">
		        <nav aria-label="Page navigation">
		        	<ul class="pagination" id="pagination"></ul>
		        </nav>
	   		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function() {
		var pageIndex = Pagination.getHashParameter();
        if(pageIndex === ""){
            pageIndex = 1;
        }
        SendPagination(pageIndex);
	});
	function SendPagination(pageIndex = 1, pageSize = 8){
        //debugger;  
        var dataMap = {
            PageIndex : pageIndex,
            PageSize : pageSize,
        };

        $.ajax({
            url: 'Main/ListGet/<?=$idPass?>',
            type: 'POST',
            dataType: 'html',
            data: dataMap,
            beforeSend: function (xhr) {
                $(".loading").show();
            },
            success : function(result){

                $("#datajax").html(result);
                /*Index cho bảng*/
                // $(".index").each(function(index, el) {
                //     $(this).html(Pagination.setIndex(parseInt($(this).html()), pageIndex, pageSize));
                // });
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
