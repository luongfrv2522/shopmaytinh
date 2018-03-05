
<?php 
$index = 1;
$result = BaseClass::GetValuePost('result'); 
$_DataResult = $result->_DataResult; 
$_PageIndex = $result->_PageIndex; 

?>
<?php if($_DataResult): ?>
    tổng: <?=$_DataResult->TotalRows*$result->_PageSize;?>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>BrandId</th>
                    <th>BrandName</th>
                    <th>Description</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="min-width: 70px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_DataResult->DataList as $key): ?>
                    <tr>
                        <td class="index"><?=$index++?></td>
                        <td><?=$key->BrandId?></td>
                        <td><?=$key->BrandName?></td>
                        <td><?=$key->Description?></td>
                        <td class="text-center"><img class="icon-grid-min" src="<?=$key->Image?>"></td>
                        <?php if ($key->Status > 0): ?>
                            <td class="text-center">Còn hàng</td>
                        <?php else: ?>
                            <td class="text-center">Hết hàng</td>
                        <?php endif ?>
                        <td class="text-center" style="min-width: 70px;">
                            <button id="btnEdit" act="btnInsert" type="button" class="btn btn-xs btn-primary" value="<?=$key->BrandId?>">
                                <i class="glyphicon glyphicon-edit"></i>
                            </button>
                            <button id="btnDelete" type="button" class="btn btn-xs btn-danger" value="<?=$key->BrandId?>">
                                <i class="glyphicon glyphicon-remove"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>    
    </div>
    <div class="pull-right" style="margin-top: -23px; margin-bottom: -25px;">
        <ul class="pagination" id="pagination"></ul>
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
<?php endif; ?>