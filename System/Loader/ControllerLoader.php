<?php 
	/**
	* 
	*/
	class ControllerLoader
	{
		public static function Load($name){
			$pathCom = PATH_APP.'/Common/Controllers/'.$name.'.php';
			$pathSub = PATH_APP.'/'.AREA.'/Controllers/'.$name.'.php';
			if(file_exists($pathSub)){
				include_once $pathSub;
				return true;
			}elseif (file_exists($pathCom)) {
				include_once $pathCom;
				return true;
			}
			return false;
		}
		
	}
	
	
?>