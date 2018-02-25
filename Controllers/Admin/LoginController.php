<?php 
	class LoginController
	{
		private $model;
		public function __construct($_action){
			require_once 'Models/UserModel.php';
			//PRINT $_action;
			$this->model = new UserModel();
			$this->$_action();
		}

		public function Index(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			
			if(BaseClass::GetSession('login')){
				//echo "session true";
				return AdminLayout::Redirect("Admin/Index.php");
			}
			return Layout::Redirect("Admin/login.php", "_Layout");
		}

		public function LoginPost(){
			$_ReturnPost = new stdClass();
			$_ReturnPost->Status = -1;

			$User = BaseClass::GetValuePost('user');
			$Pass = BaseClass::GetValuePost('pass');
			//ErrorBase::doLog($User."-".$Pass."\n");

			if($this->model->CheckLogin($User, $Pass)){
				//ErrorBase::doLog(count($this->model->CheckLogin($User, $Pass))."\n");
				$_ReturnPost->Status = 1;
				//Tạo session và lưu trữ cookie
				$_SESSION['login'] = 'true';
				//$_ReturnPost->Msg = BaseClass::GetSession('login');
			}
			die(json_encode($_ReturnPost));
		}
	}
?>