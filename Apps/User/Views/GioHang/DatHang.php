<?php 
ModelLoader::Load('ComputerModel');
$model = new ComputerModel();
$gh = BaseClass::GetSession('GioHang');
    //echo var_dump($gh);
$tong = 0;
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
                            <?php $tong+= $item->Price * $key['total']?>
                        <?php endforeach ?>
                        <tr>
                            <td>Tổng giá trị hóa đơn:</td>
                            <td colspan="2"></td>
                            <td><b><span><?=$tong?></span></b></td>
                        </tr>
                    <?php endif ?>

            </tbody></table>
        </div>

        <div id="custom-form" class="col-md-6 col-sm-8 col-xs-12">
            <form action="GioHang/DatHang" method="POST">
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input required="" maxlength="50" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Địa chỉ Email</label>
                    <input required="" type="email" class="form-control" name="mail">
                </div>
                <div class="form-group">
                    <label>Số Điện thoại</label>
                    <input required="" type="number" min="0" minlength="9" class="form-control" name="mobi">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhận hàng</label>
                    <textarea required="" class="form-control" name="addr" minlength="10" rows="3">
                        
                    </textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-info">
            </form>
        </div>
    </div>