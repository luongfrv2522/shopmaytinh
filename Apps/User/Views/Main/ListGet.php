<?php 
    $index = 1;
    $result = BaseClass::GetValuePost('result'); 
    $_DataResult = $result->_DataResult; 
    $_PageIndex = $result->_PageIndex; 

    $idPass = isset($_GET["id"])?$_GET["id"]:0; 
    
    $TenHang = "\"".BaseClass::GetValuePost('Search')."\"";
    if($result->BrandPass){
        $TenHang = 'Của: '.$result->BrandPass->BrandName;
    }
?>
<h2 class="h2-bar">Tất cả sản phẩm <?=$TenHang?></h2>
<div  class="row">
    <?php foreach ($_DataResult->DataList as $key): ?>
        <div class="col-md-3 col-sm-6 product-item text-center">
        <a href="Main/Detail/<?=$key->ComId?>">
            <img width="80" height="144" src="<?=$key->Image?>">
        </a>
        <h3><a href="Main/Detail/<?=$key->ComId?>"><?=$key->ComName?></a></h3>
        <p>Bảo hành: 12 Tháng</p>
        <p>Tình trạng: Máy Mới 100%</p>
        <p class="price">Giá: <?=$key->Price?> VNĐ</p>
        </div>
    <?php endforeach ?>
</div>





<script type="text/javascript">
    $(document).ready(function() {
        Pagging();
    });

    function Pagging(){
        $('.pagination').pagination({
            //debugger;
            items: <?=$_DataResult->TotalRows?>,
            itemOnPage: 9,
            currentPage: <?=$_PageIndex?>,
            cssStyle: 'dark-theme',
            onInit: function () {
                // fire first page loading
            },
            onPageClick: function (page, evt) {
                //alert(window.location.uri);
                //debugger;
                console.log(page);
                SendPagination(page);
            }
        });
    }
</script>