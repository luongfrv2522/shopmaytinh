<?php 

/**
* 
*/
	class UserMgerController
	{
		private $model;
		public function __construct(){
			ModelLoader::Load('UserModel');
			//PRINT $_action;
			$this->model = new UserModel();
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
	}

?>