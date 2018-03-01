<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Quản lý tài khoản</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!--    Striped Rows Table  -->

        <div class="panel panel-default">
            
            <div class="panel-heading">
                Danh sách Tài khoản
                <div class="pull-right">
                    <button type="button" class="btn btn-xm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <div class="grid-ajax">
                    
                </div>
            </div>
        </div>
        
        <!--  End  Striped Rows Table  -->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //debugger;   
        var pageIndex = Pagination.getHashParameter();
        if(pageIndex === ""){
            pageIndex = 1;
        }
        SendPagination(pageIndex);
    });

    function SendPagination(pageIndex = 1, pageSize = 5){
        debugger;  
        var dataMap = {
            PageIndex : pageIndex,
            PageSize : pageSize
        };

        $.ajax({
            url: 'Admin/UserMger/List',
            type: 'POST',
            dataType: 'html',
            data: dataMap,
            beforeSend: function (xhr) {
                $(".loading").show();
            },
            success : function(result){

                $(".grid-ajax").html(result);

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