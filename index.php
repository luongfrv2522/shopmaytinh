<?php 
	//Tắt thông báo Warning và Notice
	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
	// Đường dẫn tới hệ  thống
	define('PATH_SYS', __DIR__ .'/System');
	define('PATH_APP', __DIR__ . '/Apps');
	define('PATH_ROOT', __DIR__);
	define('_ROOT', 'shopmaytinh');
	define('ImageDefault','Public/Content/Images/default.png');
	//Các thư viện loader
	require PATH_SYS.'/Loader/AutoLoad.php';
	$Loader = array(
		'Config',
		'Model',
		'Com',
		'Controller',
		'Hand',
		'View',
		'Public'
	);
	AutoLoad::Load($Loader);

	ConfigLoader::Load('Config');	
	//Load các Hàm thư viện
	ComLoader::Load("BaseClass/Common.php");
	ComLoader::Load("BaseClass/Return.php");
	ComLoader::Load("BaseClass/Redirect.php");
	ComLoader::Load("Database/BaseMap.php");
	ComLoader::Load("Database/Connection.php");
	session_start();
	BaseClass::SetSession('undisplay','display:none;');
	if (!empty($_GET["c"])) {
		//$_PageIndex = !empty($_GET["page"])? $_GET["page"] : "none";
		$_area = empty($_GET["area"])? "" : $_GET["area"];
		define('AREA', $_area);
		
		$_controller = $_GET["c"];
		$_action = $_GET["a"];
		$_id = $_GET["id"];
		// print "controller: ".$_controller;
		// print "</br>";
		// print "action: ".$_action;
		// print "</br>";
		// print "id: ".$_id;
		// print "</br>";
		// print "area: ".$_area;
		// print "</br>";
		// print "PageIndex: ".$_PageIndex;
		// print "</br>";echo $_SERVER['SERVER_NAME'];
		//print "</br>";
		//require PATH_APP.'/'.AREA."/Controllers/".$_controller.".php";
		
		/*Run away*/
		ControllerLoader::Load($_controller);
		$__G = new $_controller();
		$__G->$_action();
	}

	
?>
