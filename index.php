<?php 
	require "BaseClass/Common.php";
	require "BaseClass/Redirect.php";
	require "BaseClass/Return.php";
	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

	session_start();

	$body="Lỗi tải Page Body!";
	if (!empty($_GET["c"])) {
		//$_PageIndex = !empty($_GET["page"])? $_GET["page"] : "none";
		$_area = empty($_GET["area"])? "" : $_GET["area"];
		$_controller = $_GET["c"];
		$_action = $_GET["a"];
		$_id = $_GET["id"];
		// print "controller: ".$_controller;
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
		require "Controllers/".$_area.'/'.$_controller.".php";
		$__G = new $_controller($_action);

		// if($_SERVER['REQUEST_METHOD'] == 'POST' || !empty($_GET["method"])) {
		// 	//require "Controllers/".$_area.'/'.$_controller.".php";
		// 	//ECHO $_SERVER['REQUEST_METHOD'];
		// 	$body = new $_controller($_action);
		// }else if($_area ==="Admin"){
		// 	//ErrorBase::doLog('session: '.BaseClass::GetSession('login'));
		// 	//điều hướng khi đã đăng nhập
		// 	require "Views/_Layout/_AdminLayout.php";
		// }
		// else{
		// 	require "Views/_Layout/_HomeLayout.php";
		// }
	}

	
?>
