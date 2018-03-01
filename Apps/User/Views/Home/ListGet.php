<?php 
	$result = BaseClass::GetValuePost('result'); 
	$_DataResult = $result->_DataResult; 
	$_PageIndex = $result->_PageIndex; 
?>
<?php if($_DataResult): ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Description</td>
				<td>Image</td>
				<td>Price</td>
				<td>Status</td>	
				<td>BrandId</td>
				<td>BrandName</td>
				<td>Posistion</td>
				<td>Created</td>
				<td>Updated</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_DataResult->DataList as $key): ?>
				<?php $datecreated = new DateTime($key->Created); ?>
				<tr>
					<td><?=$key->ComId?></td>
					<td><?=$key->ComName?></td>
					<td><?=$key->Description?></td>
					<td>
						<img class="icon-grid" src="<?=$key->Image?>">
					</td>
					<td><?=$key->Price?></td>
					<td><?=$key->Status?></td>
					<td><?=$key->BrandId?></td>
					<td><?=$key->BrandName?></td>
					<td><?=$key->Posistion?></td>
					<td><input type="datetime-local" name="" value="<?=$datecreated->format("Y-m-d\TH:i")?>"></td>
					<td><?=$key->Updated?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div class="container">
		<ul class="pagination" id="pagination"></ul>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.pagination').pagination({
				// debugger;
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