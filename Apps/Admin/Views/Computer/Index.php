
<div class="col-md-12">
    <h1 class="page-head-line">Quản lý máy tính</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <!--    Striped Rows Table  -->
        <div class="Striped-Grid">
            <div class="panel panel-default">

                <div class="panel-heading">
                    Danh sách Máy tính
                    <div class="pull-right">
                        <button id="btnInsert" act="btnInsert" type="button" class="btn btn-xm btn-primary" value="0">
                            <i class="glyphicon glyphicon-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="grid-ajax">

                    </div>
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

        //////////////////
        LoadFormInsertOrUpdate();
        Delete();
    });

    function SendPagination(pageIndex = 1, pageSize = 5){
        //debugger;  
        var dataMap = {
            PageIndex : pageIndex,
            PageSize : pageSize
        };

        $.ajax({
            url: 'Admin/Computer/List',
            type: 'POST',
            dataType: 'html',
            data: dataMap,
            beforeSend: function (xhr) {
                $(".loading").show();
            },
            success : function(result){

                $(".grid-ajax").html(result);
                $(".index").each(function(index, el) {
                    $(this).html(Pagination.setIndex(parseInt($(this).html()), pageIndex, pageSize));
                });
            },
            error : function(error){
                alert("Lỗi GetList");
            },
            complete: function () {
                $(".loading").hide();
            }
        });
    }
    function LoadFormInsertOrUpdate(){
        $(".Striped-Grid").on('click',"button[act='btnInsert']",function (argument) {
            //debugger;
            $.ajax({
                url: 'Admin/Computer/InsertOrUpdate/'+$(this).val(),
                type: 'GET',
                dataType: 'html',
                beforeSend: function (xhr) {
                    $(".loading").show();
                },
                success : function(result){

                    $(".Striped-Grid").html(result);

                },
                error : function(error){
                    alert("Lỗi GetList");
                },
                complete: function () {
                    $(".loading").hide();
                }
            });
        });
    }
    function Delete(){
        $(".Striped-Grid").on('click',' #btnDelete ',function (argument) {
            if(confirm("Xác nhận xóa id="+ $(this).val())){
               $.ajax({
                    url: 'Admin/Computer/Delete',
                    type: 'POST',
                    data: {id : $(this).val()},
                    dataType: 'html',
                    beforeSend: function (xhr) {
                        $(".loading").show();
                    },
                    success : function(result){

                        alert(result);
                        location.reload();
                    },
                    error : function(error){
                        alert("Lỗi GetList");

                    },
                    complete: function () {
                        $(".loading").hide();
                    }
                }); 
            }
        });
    }
</script>