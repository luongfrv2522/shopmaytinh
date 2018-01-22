<?php 
	//PRINT "Views/Home/Index";
?>
<div>
	<?php foreach($_ReturnData as $item): ?>
		<pre><?=$item->ComId?></pre>
		<pre><?=$item->ComName?></pre>
	<?php endforeach; ?>
</div>