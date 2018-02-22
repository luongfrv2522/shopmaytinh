<?php 
	class LoginController
	{
		private $model;
		public function LoginController($_action){

			//PRINT $_action;
			$this->$_action();
		}

		public function Index(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			//echo "Index";
			require("Views/Admin/login.php");
		}
	}
?>