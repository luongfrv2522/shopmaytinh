<?php 
	class User{
		private $data;

		function __set($fiedlname, $value){
			$this->data[$fiedlname] = $value;
		}
		function __get($fiedlname){
			//ErrorBase::doLog("User line9->".debug_backtrace()[3]['function'].'-'.$fiedlname);
			return $this->data[$fiedlname];
		}
	}
?>