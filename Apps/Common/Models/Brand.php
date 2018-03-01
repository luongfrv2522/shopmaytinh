<?php 
	class Brand{
		private $data;

		function __set($fiedlname, $value){
			$this->data[$fiedlname] = $value;
		}
		function __get($fiedlname){
			return $this->data[$fiedlname];
		}
	}
?>