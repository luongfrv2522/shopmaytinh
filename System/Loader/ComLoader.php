<?php 
	/**
	* 
	*/
	class ComLoader
	{
		public static function Load($path){
			$path = PATH_APP.'/Common/'.$path;
			require $path;
		}
	}

?>