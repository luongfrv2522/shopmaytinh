<?php 

	/**
	* 
	*/
	class AutoLoad
	{
		public static function Load($LoaderArr){
			foreach ($LoaderArr as $key) {
				require PATH_SYS.'/Loader/'.$key.'Loader.php';
			}
		}
	}
?>