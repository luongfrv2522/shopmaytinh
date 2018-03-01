<?php 

	/**
	* 
	*/
	class PublicLoader
	{
		
		public static function Load($path){
			$path = PATH_ROOT.'/Public/'.$path;
			require $path;
		}
	}
?>