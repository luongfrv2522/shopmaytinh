<?php 
	$_DataResult = BaseClass::GetValuePost("_DataResult");
	$DataS = $_DataResult->DataS;
	$DataN = $_DataResult->DataN;
?>
<?php if ($_DataResult): ?>
	<div id="main">
		<div class="products">
			<h2 class="h2-bar">sản phẩm đặc biệt</h2>
			<div class="row">
				<?php foreach ($DataS as $key): ?>
					<div class="col-md-3 col-sm-6 product-item text-center">
					<a href="Main/Detail/<?=$key->ComId?>">
						<img width="80" height="144" src="<?=$key->Image?>">
					</a>
					<h3><a href="Main/Detail/<?=$key->ComId?>"><?=$key->ComName?></a></h3>
					<p>Bảo hành: 12 Tháng</p>
					<?php if ($key->Status > 0): ?>
						<p>Tình trạng: Máy Mới 99%</p>
					<?php else: ?>
						<p>Tình trạng: Máy Mới 100%</p>
					<?php endif ?>
					<p class="price">Giá: <?=$key->Price?> VNĐ</p>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div id="main">
		<div class="products">
			<h2 class="h2-bar">sản phẩm mới</h2>
			<div class="row">
				<?php foreach ($DataN as $key): ?>
					<div class="col-md-3 col-sm-6 product-item text-center">
					<a href="#"><img width="80" height="144" src="<?=$key->Image?>"></a>
					<h3><a href="#"><?=$key->ComName?></a></h3>
					<p>Bảo hành: 12 Tháng</p>
					<p>Tình trạng: Máy Mới 100%</p>
					<p class="price">Giá: <?=$key->Price?> VNĐ</p>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>


<?php endif ?>