<?php 
	class ComputerModel{
		private $conn;
		//private $Model;
		public function __construct(){
			ModelLoader::Load('Computer');
			$this->conn = new Connection();
			//$this->Model = new Computer(); 
			
			//PRINT $a;
			//require "Model/".($this->Model).".php";//Include Model
			
		}

		public function GetList(){
			$datalist = $this->conn->ExcuteSQL("SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE c.BrandId = b.BrandId
												ORDER BY c.`ComId`");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new Computer());
		}
		public function GetListS(){
			$datalist = $this->conn->ExcuteSQL("SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE c.BrandId = b.BrandId
												ORDER BY c.`Posistion` DESC
												LIMIT 8");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new Computer());
		}
		public function GetListN(){
			$datalist = $this->conn->ExcuteSQL("SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE c.BrandId = b.BrandId
												ORDER BY c.`Updated` DESC
												LIMIT 8");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new Computer());
		}
		public function GetListPaging($pageIndex, $pageSize){
			$_ReturnData = new stdClass();

			$pageIndex = ($pageIndex - 1) * $pageSize;
			$DataList = $this->conn->ExcuteSQL(" SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE c.BrandId = b.BrandId
												ORDER BY c.`ComId`
												LIMIT {$pageIndex},{$pageSize}" );
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			$DataList = BaseMap::MapToList($DataList, new Computer());
			$_ReturnData->DataList = $DataList;

			$TotalRows =  $this->conn->ExcuteSQL(" SELECT COUNT(ComId) as Total FROM computers " );
			$TotalRows = mysqli_fetch_assoc($TotalRows)["Total"];
			$_ReturnData->TotalRows = $TotalRows/$pageSize ;
			
			return $_ReturnData;
		}
		public function GetListPagingB($pageIndex, $pageSize, $id){
			$_ReturnData = new stdClass();

			$pageIndex = ($pageIndex - 1) * $pageSize;
			$DataList = $this->conn->ExcuteSQL(" SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE c.BrandId = b.BrandId AND c.BrandId = {$id}
												ORDER BY c.`ComId`
												LIMIT {$pageIndex},{$pageSize}" );
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			$DataList = BaseMap::MapToList($DataList, new Computer());
			$_ReturnData->DataList = $DataList;

			$TotalRows =  $this->conn->ExcuteSQL(" SELECT COUNT(ComId) as Total 
													FROM computers 
													WHERE BrandId = {$id}" );
			$TotalRows = mysqli_fetch_assoc($TotalRows)["Total"];
			$_ReturnData->TotalRows = $TotalRows/$pageSize ;
			
			return $_ReturnData;
		}
		public function Single($id){
			if($id > 0){
				$datalist = $this->conn->ExcuteSQL("SELECT c.`ComId`, c.`ComName`, c.`Description`, 
												c.`Image`, c.`Price`, c.`Status`, c.`Posistion`, 
												c.`BrandId`,b.`BrandName`, c.`Updated`, c.`Created` 
												FROM `computers` as c,`brands` as b
												WHERE `ComId` = {$id}");
				return BaseMap::MapToObject($datalist, new Computer());;
			}
			return false;
		}

		public function InsertOrUpdate($item){
			$_Id = $item->ComId;
			$_Name = $item->ComName;
			$_Desc = $item->Description;
			$_Image = $item->Image;
			$_Price = $item->Price;
			$_Status = $item->Status;
			$_BrandId = $item->BrandId;
			$_Posistion = $item->Posistion;

			$sql = "INSERT INTO `computers`( `ComName`, `Description`, `Image`,
					 `Price`, `Status`, `Posistion`, `BrandId`) 
					VALUES ('{$_Name}','{$_Desc}','{$_Image}',{$_Price},{$_Status}
							,{$_Posistion},{$_BrandId})";
			if($_Id > 0){
				$sql = "UPDATE `computers` SET `ComName`='{$_Name}',`Description`='{$_Desc}'
						,`Image`='{$_Image}',`Price`={$_Price},`Status`={$_Status},`Posistion`={$_Posistion}
						,`BrandId`={$_BrandId}
						WHERE `ComId` = {$_Id}";
			}

			$_Result = $this->conn->ExcuteSQL($sql);
			return $_Result;
		}

		public function Delete($id){
			if($id > 0){
				$sql = "DELETE FROM `computers` WHERE `ComId` = {$id}";
				$_Result = $this->conn->ExcuteSQL($sql); 
				return $_Result;
			}
			return false;
		}
	}
?>