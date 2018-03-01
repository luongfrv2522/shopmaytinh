<?php 
	class LoginController
	{
		private $model;
		public function __construct(){
			ModelLoader::Load('UserModel');
			//PRINT $_action;
			$this->model = new UserModel();
		}

		public function Index(){
			//$_ReturnData = $this->model->GetList();
			//$_ReturnData = $this->model->Single(5);
			//PRINT var_dump($_GET["page"]);
			//print var_dump($_ReturnData);
			
			if(BaseClass::GetSession('login')){
				//echo "session true";
				return ViewLoader::LoadAdmin('Index.php');	
				//echo ViewLoader::LoadAdmin('Index')? 'T' : 'F';	
			}
			//echo "session false";
			//return Layout::Redirect("Admin/login.php", "_Layout");
			return ViewLoader::Load('_Layout','Login.php');
			//echo ViewLoader::Load('_Layout','Login.php')? 'T' : 'F';
		}

		public function LoginPost(){
			$_ReturnPost = new stdClass();
			$_ReturnPost->Status = -1;

			$User = BaseClass::GetValuePost('user');
			$Pass = BaseClass::GetValuePost('pass');
			//ErrorBase::doLog($User."-".$Pass."\n");
			$aUser = new User();
			$aUser = $this->model->CheckLogin($User, $Pass);
			//ErrorBase::doLog($aUser->UserId);
			if($aUser->UserId > 0){
				//ErrorBase::doLog(count($this->model->CheckLogin($User, $Pass))."\n");
				$_ReturnPost->Status = 1;
				//Tạo session và lưu trữ cookie
				$login = new stdClass();
				$login->FullName = $aUser->FullName;
				$login->Image = $aUser->Image;
				$_SESSION['login'] = $login;
				$_ReturnPost->Data = 'Admin/Login/Index';
			}
			die(json_encode($_ReturnPost));
		}
		public function LogOut()
		{
			unset($_SESSION['login']);
			RedirectToAction('Admin/Login/Index');
		}
	}
?>