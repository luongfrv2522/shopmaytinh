<?php 
	//echo __DIR__;
	class HomeController{
		private $model;
		public function __construct(){
			ModelLoader::Load('ComputerModel');
			$this->model = new ComputerModel();
			//PRINT $_action;
		}

		public function Index(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			//echo "Index";
			// require("Views/Home/Index.php");
			//$flag = ViewLoader::Load('_HomeLayout');
			return ViewLoader::LoadUser();
		}

		public function List(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			//require("Views/Home/List.php");
			return ViewLoader::LoadUser();
		}

		public function UploadImg(){
			//require "BaseClass/Common.php";
			//exit(var_dump($_POST));
			$_DataResult = MyUploadLB::UploadImage("file", "Public/Content/Images/Icon/");
			exit(json_encode($_DataResult));
		}

		public function ListGet(){
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
			//echo "Insert";
			$_DataResult = false; //tạm thời chỉ thử insert
			// require "Views/Home/InsertOrUpdate.php";
			BaseClass::SetValuePost('_DataResult',$_DataResult);
			return ViewLoader::LoadUser();
		}

		public function InsertOrUpdatePost(){
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
			if($rs){
				die(json_encode(array('status'=>1)));
			}
			die(json_encode(array('status'=>-1)));
			
			//echo var_dump($item);
		}
	}
 ?>