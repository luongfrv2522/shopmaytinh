<?php 
    $_DataResult = BaseClass::GetValuePost('_DataResult');

?>

<?php if ($_DataResult): ?>
    <div id="product">
        <div id="prd-thumb" class="col-md-6 col-sm-12 col-xs-12 text-center" >
            <img width="160px" src="<?=$_DataResult->Image?>">
        </div>
        <div id="prd-intro" class="col-md-6 col-sm-12 col-xs-12">
            <h3><?=$_DataResult->ComName?></h3>
            <p id="prd-price">
                <span class="sl">Giá sản phẩm:</span>
                <span class="sr"><?=$_DataResult->Price?> VNĐ</span>
            </p>
            <!-- BEGIN Desc -->
            <?=$_DataResult->Description ?>
            <!-- END Desc -->
            <a href="GioHang/Index/<?=$_DataResult->ComId?>"><button type="button" class="btn btn-danger">đặt mua</button></a>
        </div>
        <div id="prd-details" class="col-md-12 col-sm-12 col-xs-12 text-justify">
            <hr>
            <p>
                Không có mô tả thêm
            </p>
        </div>
    </div>
<?php endif ?>