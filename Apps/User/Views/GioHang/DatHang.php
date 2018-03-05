<?php 
ModelLoader::Load('ComputerModel');
$model = new ComputerModel();
$gh = BaseClass::GetSession('GioHang');
    //echo var_dump($gh);
?>
<div id="main">
    <div id="checkout">
        <h2 class="h2-bar">xác nhận hóa đơn thanh toán</h2>
        <table class="table table-bordered">
            <tbody><tr>
            </tr></tbody><thead>
                <tr><th>tên sản phẩm</th>
                    <th>giá</th>
                    <th>số lượng</th>
                    <th>thành tiền</th>
                </tr></thead>

                <tbody>
                    <?php if ($gh !== '' && $gh->Quantity > 0): ?>
                        <?php foreach ($gh->DataList as $key): ?>
                            <?php $item = $model->Single($key['id']); ?>
                            <tr>
                                <td><?=$item->ComName?></td>
                                <td><span><?=$item->Price?></span></td>
                                <td><?=$key['total']?></td>
                                <td><span><?=$item->Price * $key['total']?></span></td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                

            </tbody></table>
        </div>

        <div id="custom-form" class="col-md-6 col-sm-8 col-xs-12">
            <form>
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input required="" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Địa chỉ Email</label>
                    <input required="" type="text" class="form-control" name="mail">
                </div>
                <div class="form-group">
                    <label>Số Điện thoại</label>
                    <input required="" type="text" class="form-control" name="mobi">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhận hàng</label>
                    <input required="" type="text" class="form-control" name="add">
                </div>
                <button class="btn btn-info">Mua hàng</button>
            </form>
        </div>
    </div>