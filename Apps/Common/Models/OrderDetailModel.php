<?php 
	class OrderDetailModel{
		private $conn;
		//private $Model;
		public function __construct(){
			ModelLoader::Load('OrderDetail');
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
		public function GetListSearch($mode, $key){
			$Se = '';
			switch ($mode) {
				case 1:
					$Se = "`Name` like'%".$key."%'";
					break;
				case 2:
					$Se = "`Email` like'%".$key."%'";
					break;
				case 4:
					$Se = "`Address` like'%".$key."%'";
					break;
				default:
					$Se = "`PhoneNum` like'%".$key."%'";
					break;
			}
			$sql = "SELECT * 
					FROM `order_detail`
					WHERE $Se";
			//ErrorBase::doLog($sql);
			$datalist = $this->conn->ExcuteSQL($sql);
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new OrderDetail());
		}
		public function GetListSPbyOrder($id){
			$datalist = $this->conn->ExcuteSQL("SELECT * 
												FROM `computers_map_order_detail` a,`computers` b 
												WHERE a.`ComId` = b.`ComId`
													AND a.`OrderId` = {$id}");
			//print var_dump($datalist);
			//print var_dump(BaseMap::MapToList($datalist, new Computer()));
			return BaseMap::MapToList($datalist, new OrderDetail());
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

		public function InsertGioHang($item){
			//$_Id = $item->OrderId;
			$_Name = $item->Name;
			$_Email = $item->Email;
			$_PhoneNum = $item->PhoneNum;
			$_Address = $item->Address;
			//echo var_dump($item);
			$sql = "INSERT INTO `order_detail` (`OrderId`, `Name`, `Email`, `PhoneNum`, `Address`) 
					VALUES (NULL, '{$_Name}', '{$_Email}', '{$_PhoneNum}', '{$_Address}')";
			$_Result = $this->conn->ExcuteSQL($sql);


			if($_Result){
				$_Result = $this->conn->ExcuteSQL("SELECT * 
													FROM order_detail
													Order by OrderId DESC
													LIMIT 1");
				if($_Result){
					$_Result = BaseMap::MapToObject($_Result, new stdClass());
					$orderid = $_Result->OrderId;
					$gh = BaseClass::GetSession('GioHang');
					if($gh !==''){
						foreach ($gh->DataList as $key) {
							$ComId = $key['id'];
							$Quantity = $key['total'];
							$OrderId = $orderid;
							ErrorBase::doLog($ComId.' - '.$Quantity.' - '.$OrderId);
							$_Result = $this->conn->ExcuteSQL("INSERT INTO `computers_map_order_detail` 
								(`Id`, `OrderId`, `ComId`, `Quantity`) 
								VALUES (NULL, {$OrderId}, {$ComId}, {$Quantity})");	
						}
					}

				}
			}
			

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