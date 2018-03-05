<?php 
    $variable = BaseClass::GetValuePost('rsearch');
    $i = 1
?>
<?php if ($variable): ?>
    <?php foreach ($variable as $key): ?>
        <?php
            if($i++ > 3) {
                break;
            }
            $tong = 0;
            $model = new OrderDetailModel();
            $rssub = $model->GetListSPbyOrder($key->OrderId);
            $status = '';
            switch ($key->Status) {
                case 0:
                    $status = "Đặt hàng thành công!";
                    break;
                case 1:
                    $status = "Đã tiếp nhận!";
                    break;
                case 2:
                    $status = "Đang giao hàng!";
                    break;
                default:
                    $status = "Giao hàng thành công!";
                    break;
            }
        ?>
        <div id="main">
            <div id="checkout">
                <h2 class="h2-bar">Đơn hàng của <?=$key->Name?> - Mã Hóa đơn: <?=$key->OrderId?> - Trạng thái: <?=$status?></h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>tên sản phẩm</th>
                            <th>giá</th>
                            <th>số lượng</th>
                            <th>thành tiền</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($rssub): ?>
                            <?php foreach ($rssub as $item): ?>
                                <tr>
                                    <td><?=$item->ComName?></td>
                                    <td><span><?=$item->Price?></span></td>
                                    <td><?=$item->Quantity?></td>
                                    <td><span><?=$item->Price * $item->Quantity?></span></td>
                                </tr>
                                <?php $tong+= $item->Price * $item->Quantity?>
                            <?php endforeach ?>
                            <tr>
                                <td>Tổng giá trị hóa đơn:</td>
                                <td colspan="2"></td>
                                <td><b><span><?=$tong?></span></b></td>
                            </tr>
                            <tr>
                                <td>Trạng thái</td>
                                <td colspan="2"></td>
                                <td><b><span><?=$status?></span></b></td>
                            </tr>
                        <?php endif ?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>