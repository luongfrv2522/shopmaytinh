<?php 
	$body="Lỗi tải Page Body!";
if (!empty($_GET["c"])) {
	$_area = empty($_GET["area"])? "none" : $_GET["area"];
	$_controller = $_GET["c"];
	$_action = $_GET["a"];
	$_id = $_GET["id"];
	print "controller: ".$_controller;
	print "</br>";
	print "action: ".$_action;
	print "</br>";
	print "id: ".$_id;
	print "</br>";
	print "area: ".$_area;
	print "</br>";

	require "Controllers/".$_controller.".php";
	if($_area ==="admin"){
		require "Views/_Layout/_AdminLayout.php";
	}
	else{
		require "Views/_Layout/_HomeLayout.php";
	}
}
?>
