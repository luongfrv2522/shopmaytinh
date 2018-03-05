<?php 
	/**
	* 
	*/
	class ConfigLoader
	{
		
		public static function Load($config){
			if (file_exists(PATH_SYS . '/Config/' . $config . '.php')){
	            $config = include_once PATH_SYS . '/Config/' . $config . '.php';
	            if ( !empty($config) ){
	                foreach ($config as $key => $item){
	                    $this->config[$key] = $item;
	                }
	            }
	            return true;
	        }
	        return false;
		}
	}


?>