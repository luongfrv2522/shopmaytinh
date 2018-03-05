<?php  
	/**
	* Kết nối cơ sở dữ liệu
	*/

	class Connection 
	{
		private $conn;
		public function __construct()
		{
			 if(empty($this->conn)){
			 	$this->conn=mysqli_connect(_HOST, _USER,_PASS,_DATABASE) or ErrorBase::doLog("Kết nối DB thất bại!\n");
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