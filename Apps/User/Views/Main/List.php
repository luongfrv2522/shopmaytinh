<?php 
    $idPass = isset($_GET["id"])?$_GET["id"]:0; 
    BaseClass::SetSession('undisplay','');
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
        debugger;
        $("#search-input").val('<?=BaseClass::GetValuePost('Search')?>');
		var pageIndex = Pagination.getHashParameter();
        if(pageIndex === ""){
            pageIndex = 1;
        }
        SendPagination(pageIndex);
        // $(".search-form").submit(function(e) {
        //     e.preventDefault();
        //     SendPagination(pageIndex);
            
        // });
	});
	function SendPagination(pageIndex = 1, pageSize = 8){
          
        var search = $("#search-input").val();
        var dataMap = {
            PageIndex : pageIndex,
            PageSize : pageSize,
            Search : search,
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
