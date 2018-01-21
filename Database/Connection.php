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
			 	$this->conn=mysqli_connect("localhost", "root","","shopbanhang") or die("can't connect database");
			 	mysqli_set_charset($this->conn,"utf8");
			 }
		}
		public function ExcuteSQL($sql)
		{
			$result = mysqli_query($this->conn, $sql) or die("select error".mysqli_error($this->$conn));
			return $result;
		}
	}
?>