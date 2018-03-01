
<?php 
$index = 1;
$result = BaseClass::GetValuePost('result'); 
$_DataResult = $result->_DataResult; 
$_PageIndex = $result->_PageIndex; 
?>
<?php if($_DataResult): ?>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>Image</th>
                    <th>Admin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_DataResult->DataList as $key): ?>
                    <tr>
                        <td><?=$index++?></td>
                        <td><?=$key->UserId?></td>
                        <td><?=$key->UserName?></td>
                        <td><?=$key->FullName?></td>
                        <td><img class="icon-grid-min" src="<?=$key->Image?>"></td>
                        <?php if ($key->Permission > 0): ?>
                            <td><img class="icon-grid-min" src="Public/Content/Images/tick.png"></td>
                        <?php else: ?>
                            <td><img class="icon-grid-min" src="Public/Content/Images/none.png"></td>
                        <?php endif ?>
                        <td>
                            <button type="button" class="btn btn-xs btn-primary">
                                <i class="glyphicon glyphicon-edit"></i>
                            </button>
                            <button type="button" class="btn btn-xs btn-danger">
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
        });
    </script>
<?php endif; ?>