<?php 
	class ComputerModel{
		private $conn;
		//private $Model;
		public function __construct(){
			require "Models/Computer.php";
			require "Database/Connection.php";
			require "Database/BaseMap.php";
			$this->conn = new Connection();
			//$this->Model = new Computer(); 
			
			//PRINT $a;
			//require "Model/".($this->Model).".php";//Include Model
			
		}

		public function GetList(){
			$datalist = $this->conn->ExcuteSQL("SELECT * FROM `computers`");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new Computer());
		}
	}
?>