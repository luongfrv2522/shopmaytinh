<?php 
	class UserModel{
		private $conn;
		public function __construct(){
			ModelLoader::Load('User');
			$this->conn = new Connection();
		}
		public function CheckLogin($user, $pass){
			$pass = BaseClass::GetMD5($pass);
			//ErrorBase::doLog("1. ".$pass."\n");
			$datalist = $this->conn->ExcuteSQL("SELECT * 
												FROM users
												WHERE UserName='{$user}' AND Password='{$pass}' AND Permission='2'");
			//ErrorBase::doLog("CheckLogin.".var_dump($datalist));
			return BaseMap::MapToObject($datalist, new User());
		}
		public function GetListPaging($pageIndex, $pageSize){
			$_ReturnData = new stdClass();

			$pageIndex = ($pageIndex - 1) * $pageSize;
			$DataList = $this->conn->ExcuteSQL(" SELECT `UserId`, `UserName`, `Password`, 
												`FullName`, `Image`, `Permission`
												FROM `users` 
												ORDER BY UserId
												LIMIT {$pageIndex},{$pageSize}" );
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			$DataList = BaseMap::MapToList($DataList, new User());
			$_ReturnData->DataList = $DataList;

			$TotalRows =  $this->conn->ExcuteSQL(" SELECT COUNT(UserId) as Total FROM users " );
			$TotalRows = mysqli_fetch_assoc($TotalRows)["Total"];
			$_ReturnData->TotalRows = $TotalRows/$pageSize ;
			
			return $_ReturnData;
		}
		public function GetList(){
			$datalist = $this->conn->ExcuteSQL("SELECT `UserId`, `UserName`, `Password`, 
												`FullName`, `Image`, `Permission`
												FROM `users` 
												ORDER BY UserId");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new User());
		}
		public function Single($id){
			if($id > 0){
				$datalist = $this->conn->ExcuteSQL("SELECT `UserId`, `UserName`, `Password`, 
												`FullName`, `Image`, `Permission`
												FROM `users` 
												WHERE `UserId` = {$id}");
				return BaseMap::MapToObject($datalist, new User());
			}
			return false;
		}
		public function InsertOrUpdate($item){
			$UserId = $item->UserId;
			$UserName = $item->UserName;
			$Password = $item->Password;
			$FullName = $item->FullName;
			$Image = $item->Image;
			$Permission = $item->Permission;


			$sql = "INSERT INTO `users` (`UserId`, `UserName`, `Password`, `FullName`, `Image`, `Permission`) 
					VALUES (NULL, '{$UserName}', '{$Password}', '{$FullName}', '{$Image}', '{$Permission}')";
			if($UserId > 0){
				if($Image ===''){
					$sql = "UPDATE `users` SET `UserName` = '{$UserName}',
						`FullName` = '{$FullName}',  `Permission` = '{$Permission}' 
						WHERE `users`.`UserId` = {$UserId}";
					}else{
						$sql = "UPDATE `users` SET `UserName` = '{$UserName}',
						`FullName` = '{$FullName}', `Image` = '{$Image}', `Permission` = '{$Permission}' 
						WHERE `users`.`UserId` = {$UserId}";
					}
				
				//`Password` = '{$Password},`Image` = '{$Image}','
			}

			$_Result = $this->conn->ExcuteSQL($sql);
			return $_Result;
		}
		public function Delete($id){
			if($id > 0){
				$sql = "DELETE FROM `users` WHERE `UserId` = {$id}";
				$_Result = $this->conn->ExcuteSQL($sql); 
				return $_Result;
			}
			return false;
		}
	}
?>