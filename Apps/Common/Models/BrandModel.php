<?php 
	class BrandModel{
		private $conn;
		//private $Model;
		public function __construct(){
			ModelLoader::Load('Brand');
			$this->conn = new Connection();
			//$this->Model = new Computer(); 
			
			//PRINT $a;
			//require "Model/".($this->Model).".php";//Include Model
			
		}

		public function GetList(){
			$datalist = $this->conn->ExcuteSQL("SELECT * 
												FROM brands
												ORDER BY `BrandId`");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new Brand());
		}

		public function GetListPaging($pageIndex, $pageSize){
			$_ReturnData = new stdClass();

			$pageIndex = ($pageIndex - 1) * $pageSize;
			$DataList = $this->conn->ExcuteSQL(" SELECT * 
												FROM brands
												ORDER BY `BrandId`
												LIMIT {$pageIndex},{$pageSize}" );
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			$DataList = BaseMap::MapToList($DataList, new Brand());
			$_ReturnData->DataList = $DataList;

			$TotalRows =  $this->conn->ExcuteSQL(" SELECT COUNT(BrandId) as Total FROM brands " );
			$TotalRows = mysqli_fetch_assoc($TotalRows)["Total"];
			$_ReturnData->TotalRows = $TotalRows/$pageSize ;
			
			return $_ReturnData;
		}

		public function Single($id){
			if($id > 0){
				$datalist = $this->conn->ExcuteSQL("SELECT * 
												FROM brands
												WHERE `BrandId` = {$id}");
				return BaseMap::MapToObject($datalist, new Brand());;
			}
			return false;
		}

		public function InsertOrUpdate($item){
			$_Id = $item->BrandId;
			$_Name = $item->BrandName;
			$_Desc = $item->Description;
			$_Image = $item->Image;
			$_Status = $item->Status;

			$sql = "INSERT INTO `brands` (`BrandId`, `BrandName`, `Description`, `Image`, `Status`) 
					VALUES (NULL, '{$_Name}', '{$_Desc}', '{$_Image}', '{$_Status}')";
			if($_Id > 0){
				$sql = "UPDATE `brands` SET `BrandName` = '{$_Name}', `Description` = '{$_Desc}', 
						`Image` = '{$_Image}', `Status` = '{$_Status}' 
						WHERE `brands`.`BrandId` = {$_Id};";
			}

			$_Result = $this->conn->ExcuteSQL($sql);
			return $_Result;
		}

		public function Delete($id){
			if($id > 0){
				$sql = "DELETE FROM `brands` WHERE `BrandId` = {$id}";
				$_Result = $this->conn->ExcuteSQL($sql); 
				return $_Result;
			}
			return false;
		}
	}
?>