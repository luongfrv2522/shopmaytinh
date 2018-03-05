<?php 
	/**
	* 
	*/
	class ComputerController
	{
		
		private $model;
		public function __construct(){
			ModelLoader::Load('ComputerModel');
			ModelLoader::Load('BrandModel');
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
			$_DataResult = new stdClass();
			if(BaseClass::CheckRequestMethod('POST')){

				$item = new Computer();
				$item->ComId = BaseClass::GetValuePost("ComId");
				$item->ComName = $_POST["ComName"];
				$item->Description = $_POST["Description"];
				$item->Price = $_POST["Price"];
				$item->Status = $_POST["Status"];
				$item->BrandId = $_POST["BrandId"];
				$item->Posistion = $_POST["Posistion"];
				$item->Image = $_POST["Image"];
				

				$rs = $this->model->InsertOrUpdate($item);
				 die($rs>0? "Thao tác Thành công" : "Thao tác Thất bại");
			}
			$model1 = new BrandModel();
			$_DataResult->DataBrand = $model1->GetList();

			$idd = BaseClass::GetValueGet("id");
			if($idd !== ''){
				$_DataResult->DataCom = $this->model->Single($idd);
			}
			BaseClass::SetValuePost('_DataResult',$_DataResult);
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