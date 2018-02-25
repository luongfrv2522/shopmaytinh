<?php 
	class UserModel{
		private $conn;
		public function __construct(){
			require "Models/User.php";
			require "Database/Connection.php";
			require "Database/BaseMap.php";
			$this->conn = new Connection();
		}
		public function CheckLogin($user, $pass){
			$pass = BaseClass::GetMD5($pass);
			//ErrorBase::doLog("1. ".$pass."\n");
			$datalist = $this->conn->ExcuteSQL("SELECT * 
												FROM users
												WHERE UserName='{$user}' AND Password='{$pass}'");
			return count(BaseMap::MapToList($datalist, new User())) > 0 ? true : false;
		}
	}
?>