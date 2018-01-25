<?php 

	class HomeController{
		private $model;
		public function HomeController($_action){
			require "Models/ComputerModel.php";

			$this->model = new ComputerModel();
			//PRINT $_action;
			$this->$_action();
		}

		public function Index(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			require("Views/Home/Index.php");
		}

		public function UploadImg(){
			require "BaseClass/Common.php";
			//exit(var_dump($_POST));
			$_DataResult = MyUploadLB::UploadImage("Content/Images/Icon/");
			exit(json_encode($_DataResult));
		}

		public function ListGet(){
			$_PageIndex = !empty($_POST["PageIndex"])? $_POST["PageIndex"] : "1";
			$_PageSize = !empty($_POST["PageSize"])? $_POST["PageSize"] : "5";
			$_DataResult = $this->model->GetListPaging($_PageIndex,$_PageSize);
			if($_DataResult){
				require("Views/Home/ListGet.php");
				exit();
			}
			exit("rỗng!");

		}
	}
 ?>