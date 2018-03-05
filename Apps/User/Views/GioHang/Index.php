<?php 
ModelLoader::Load('ComputerModel');
$model = new ComputerModel();
$gh = BaseClass::GetSession('GioHang');
    //echo var_dump($gh);
?>
<div id="main">
    <div id="cart">
        <h2 class="h2-bar">giỏ hàng của bạn</h2>
        <?php if ($gh !== '' && $gh->Quantity > 0): ?>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:40%">Sản phẩm</th>
                        <th style="width:10%">Giá</th>
                        <th style="width:10%">Số lượng</th>
                        <th style="width:30%" class="text-center">Tổng tiền</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <!-- Product Item -->
                <?php foreach ($gh->DataList as $key): ?>
                    <?php $item = $model->Single($key['id']); ?>
                    <tbody dat="<?=$key['id']?>">
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="<?=$item->Image?>" alt="..." class="img-responsive"></div>
                                    <div class="col-sm-10">
                                        <h5><?=$item->ComName?></h5>
                                    </div>
                                </div>
                            </td>
                            <td id="price"><?=$item->Price?></td>
                            <td id="quantity">
                                <input id="has-quantity" name="has-quantity" type="number" min="1" class="form-control text-center" value="<?=$key['total']?>">
                            </td>
                            <td data-th="Subtotal" class="text-center"><span id="set-t"><?=$key['total'] * $item->Price?></span></td>
                            <td class="delete" data-th="">

                                <button onclick="DeleteOne(this);" class="btn btn-danger btn-sm" data-id="<?=$key['id']?>">Xóa</button>
                         
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
                <!-- End Product Item -->
                <tfoot>
                    <tr>
                        <td>
                            <a href="Main/List"  class="btn btn-warning">Tiếp tục mua hàng</a>
                            <a href="javascript:void(0);" id="UpdateS" class="btn btn-info">Cập nhật giỏ hàng</a>  
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center">
                            <strong>
                                Tổng tiền giỏ hàng: <span id="set-to">0</span>

                            </strong>

                        </td>
                        <td><a href="GioHang/DatHang" class="btn btn-success btn-block">Thanh toán</a></td>
                    </tr>
                </tfoot>
            </table>
            <script type="text/javascript">
                $(document).ready(function() {

                    TinhTien();
                    $("input[name=has-quantity]").change(function(){
                        //debugger;
                        var a = $(this).parent().parent();
                        TinhTienSub(a);
                        TinhTien();
                    });
                    $('#UpdateS').click(function(argument) {
                        UpdateS();
                    })
                });
                function TinhTienSub(e) {

                  var a = $(e).find('#price').text();
                  var b = $(e).find('#has-quantity').val();
                  $(e).find('#set-t').html(a * b);

              }
              function TinhTien() {
                    //debugger;
                    var tong = 0;
                    $("tbody tr").each(function(index, val) {
                       var a = $(this).find('#price').text();
                       var b = $(this).find('#has-quantity').val();
                       tong += a * b;
                   });
                    $('#set-to').html(tong);
                }
                function UpdateS(){
                    //debugger;
                    var dataval = [];
                    $("tbody tr").each(function(index, val) {
                        var item = {
                            "id" : $(this).parent().attr('dat'),
                            "total" : $(this).find('#has-quantity').val()
                        };
                        dataval.push(item);
                    });
                    //alert(dataval[0].id);
                    $.ajax({
                        url: 'GioHang/UpdateS',
                        cache: false,
                        type: 'POST',
                        dataType: 'json',
                        data: {dataPs : JSON.stringify(dataval)},
                        success : function(result){

                            //alert(result);
                            alert(result.Msg);
                            /*Index cho bảng*/
                            // $(".index").each(function(index, el) {
                            //     $(this).html(Pagination.setIndex(parseInt($(this).html()), pageIndex, pageSize));
                            // });
                        },
                        error : function(error){
                            alert("Lỗi GetList");
                        }
                    });
                }
                function DeleteOne(el){
                    debugger;
                    var id = $(el).data('id');
                    //alert(dataval[0].id);
                    $.ajax({
                        url: 'GioHang/DeleteOne',
                        cache: false,
                        type: 'POST',
                        dataType: 'json',
                        data: {id: id},
                        success : function(result){

                            //alert(result);
                            alert(result.Msg);
                            window.location.reload();
                            /*Index cho bảng*/
                            // $(".index").each(function(index, el) {
                            //     $(this).html(Pagination.setIndex(parseInt($(this).html()), pageIndex, pageSize));
                            // });
                        },
                        error : function(error){
                            alert("Lỗi GetList");
                        }
                    });
                }
            </script>
        <?php endif ?>
    </div>
</div>
<div id="custom-form" class="col-sm-12">
        <form class="dlskajdlask">
            <div class="form-inline">
                <label>Tìm đơn hàng: </label>
                <select class="form-control" id="fillter">
                    <option value="1">Tên khách hàng</option>
                    <option value="2">Email</option>
                    <option value="3">Số điện thoại</option>
                    <option value="4">Địa chỉ</option>
                </select>
                <input id="serda" required="" maxlength="50" type="text" class="form-control" name="name">
                <input type="submit" name="submit" class="btn btn-info">
            </div>
        </form>
    </div>
</div>
<div id="custom-form" name="hoadonajax" class="col-xs-12">
    <div class="rsearch">
        
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.dlskajdlask').submit(function(e) {
            //debugger;
            e.preventDefault();
            var datas = {
                mode : $('#fillter').val(),
                keyS : $('#serda').val(),
            }
            $.ajax({
                url: 'GioHang/TimGioHang',
                type: 'POST',
                dataType: 'html',
                data: datas,
                success : function(result){
                    //alert(result);
                    $('.rsearch').html(result);
                },
                error : function(error){
                    alert("Lỗi GetList");
                }
            });
        });
    });
</script>