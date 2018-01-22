<?php  
	/**
	* Kết nối cơ sở dữ liệu
	*/
	class Connection 
	{
		private $conn;
		public function Connection()
		{
			//error_reporting(E_ALL & ~ E_NOTICE);//Loại bỏ cảnh báo.
			 if(empty($this->conn)){
			 	$this->conn=mysqli_connect("localhost", "UserShopMayTinh","123456","shopmaytinh");
			 	mysqli_set_charset($this->conn,"utf8");
			 }
		}
		public function ExcuteSQL($sql)
		{
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
?>