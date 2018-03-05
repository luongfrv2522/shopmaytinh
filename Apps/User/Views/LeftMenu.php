<?php 
    ModelLoader::Load('BrandModel');
    $model = new BrandModel();
    $_DataResult = $model->GetList();
?>
<h2 class="h2-bar"><a class="branditem" href="Main/List">danh mục sản phẩm</a></h2>
<ul>
   <?php foreach ($_DataResult as $key): ?>
   <li><a class="branditem" href="<?="Main/List/".$key->BrandId?>" href="#main"><?=$key->BrandName?></a></li>
   <?php endforeach ?>
    

</ul>