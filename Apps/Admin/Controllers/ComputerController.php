<?php 
	/**
	* 
	*/
	class ComputerController
	{
		
		private $model;
		public function __construct(){
			ModelLoader::Load('ComputerModel');
			//PRINT $_action;
			$this->model = new ComputerModel();
		}
		public function Index(){
			return ViewLoader::LoadAdmin();
		}
		public function List()
		{
			$result = new ReturnObj();
			$_PageIndex = !empty($_POST["PageIndex"])? $_POST["PageIndex"] : "1";
			$_PageSize = !empty($_POST["PageSize"])? $_POST["PageSize"] : "5";

			$result->_DataResult = $this->model->GetListPaging($_PageIndex,$_PageSize);
			$result->_PageIndex = $_PageIndex;
			$result->_PageSize = $_PageSize;
			if($result->_DataResult){
				//require("Views/Home/ListGet.php");
				
				BaseClass::SetValuePost('result',$result);
				return ViewLoader::LoadNoneLayout();
			}
			exit("rỗng!");
		}
		public function InsertOrUpdate(){
			if(BaseClass::CheckRequestMethod('POST')){

				$item = new Computer();
				$item->ComId = 0;
				$item->ComName = $_POST["Name"];
				$item->Description = $_POST["Desc"];
				$item->Price = $_POST["Price"];
				$item->Status = $_POST["Status"];
				$item->BrandId = $_POST["BrandId"];
				$item->Posistion = $_POST["Posistion"];
				$item->Image = $_POST["ImageUrl"];
				

				$rs = $this->model->InsertOrUpdate($item);
				 die($rs>0? "Thao tác Thành công" : "Thao tác Thất bại");
			}
			$idd = BaseClass::GetValueGet("id");
			if($idd !== ''){
				
				$_DataResult = new Computer();
				$_DataResult = $this->model->Single($idd);

				BaseClass::SetValuePost('_DataResult',$_DataResult);
			}
			return ViewLoader::LoadNoneLayout();
		}
		public function Delete(){
			$id = BaseClass::GetValuePost('id');
			//echo $id;
			$rs = $this->model->Delete($id);
			die($rs? "Thao tác Thành công" : "Thao tác Thất bại");
		}
	}

?>