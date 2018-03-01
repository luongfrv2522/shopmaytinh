<?php 
	/**
	* 
	*/
	class HandLoader
	{
		public static function Load($path){
			$path = PATH_APP.'/'.$path;
			if (file_exists($path)){
	            require $path;
	            return true;
	        }
	        return false;
		}
	}
?>