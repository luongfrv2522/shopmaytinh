<?php 
	//echo __DIR__;
	class MainController{
		private $model;
		public function __construct(){
			ModelLoader::Load('ComputerModel');
			ModelLoader::Load('BrandModel');
			$this->model = new ComputerModel();
			//PRINT $_action;
		}

		public function Index(){
			$_DataResult = new stdClass();
			$_DataResult->DataS = $this->model->GetListS();
			$_DataResult->DataN = $this->model->GetListN();

			BaseClass::SetValuePost('_DataResult',$_DataResult);
			return ViewLoader::LoadMain();
		}

		public function List(){
			return ViewLoader::LoadMain();
		}
		public function ListGet(){
			$result = new ReturnObj();
			$_PageIndex = !empty($_POST["PageIndex"])? $_POST["PageIndex"] : "1";
			$_PageSize = !empty($_POST["PageSize"])? $_POST["PageSize"] : "8";

			$id = isset($_GET["id"])?$_GET["id"]:0;
			$search = BaseClass::GetValuePost('Search');
			if($id > 0 && $search ===''){
				$result->_DataResult = $this->model->GetListPagingB($_PageIndex,$_PageSize, $id);
			}elseif($id <= 0 && $search ===''){
				$result->_DataResult = $this->model->GetListPaging($_PageIndex,$_PageSize);
			}elseif ($search !== '') {
				$result->_DataResult = $this->model->GetListPaging($_PageIndex,$_PageSize,$search);
			}
			
			$model1 = new BrandModel();
			$aBrand = $model1->Single($id);
			$result->BrandPass = $aBrand;

			$result->_PageIndex = $_PageIndex;
			$result->_PageSize = $_PageSize;
			if($result->_DataResult){
				//require("Views/Home/ListGet.php");
				
				BaseClass::SetValuePost('result',$result);
				return ViewLoader::LoadNoneLayout();
			}
			exit("rỗng!");	
		}
		public function UploadImg(){
			//require "BaseClass/Common.php";
			//exit(var_dump($_POST));
			$_DataResult = MyUploadLB::UploadImage("file", "Public/Content/Images/Icon/");
			exit(json_encode($_DataResult));
		}

		public function Detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			if($id > 0){
				$_DataResult = $this->model->Single($id);
				BaseClass::SetValuePost('_DataResult',$_DataResult);
			}else{
				die("Rỗng");
			}
			return ViewLoader::LoadMain();
		}
	
	}
 ?>