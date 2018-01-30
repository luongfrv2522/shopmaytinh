<?php 
	require "BaseClass/Common.php";
	$body="Lỗi tải Page Body!";
if (!empty($_GET["c"])) {
	//$_PageIndex = !empty($_GET["page"])? $_GET["page"] : "none";
	$_area = empty($_GET["area"])? "none" : $_GET["area"];
	$_controller = $_GET["c"];
	$_action = $_GET["a"];
	$_id = $_GET["id"];
	//  print "controller: ".$_controller;
	//  print "</br>";
	// print "action: ".$_action;
	// print "</br>";
	// print "id: ".$_id;
	// print "</br>";
	// print "area: ".$_area;
	// print "</br>";
	// print "PageIndex: ".$_PageIndex;
	// print "</br>";echo $_SERVER['SERVER_NAME'];
	//print "</br>";
	require "Controllers/".$_controller.".php";
	if($_area ==="admin"){
		require "Views/_Layout/_AdminLayout.php";
	}
	else if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//ECHO $_SERVER['REQUEST_METHOD'];
		$body = new $_controller($_action);
	}
	else{
		require "Views/_Layout/_HomeLayout.php";
	}
}
?>
