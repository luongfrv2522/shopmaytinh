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
			$_ReturnData = $this->model->GetList();
			//print var_dump($_ReturnData);
			require "Views/Home/Index.php";
		}
	}
 ?>