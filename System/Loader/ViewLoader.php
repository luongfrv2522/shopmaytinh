<?php 

	/**
	* 
	*/
	class ViewLoader
	{

		public static function Load($layout, $path='', $rule=false)
		{
			//$classController = str_replace('Controller','',debug_backtrace()[1]['class']);
			
			//echo $classController;
			$pathCom = PATH_APP.'/Common/Views/'.$path;
			$pathSub = PATH_APP.'/'.AREA.'/Views/'.$path;
			if($path ===''){
				$level = 2;
				if($rule){
					$level = 3;
				}
				extract(ViewLoader::AutoGetControllerAndAction($level));
				$pathCom = PATH_APP.'/Common/Views/'.$classController.'/'.$actionFunction.'.php';
				$pathSub = PATH_APP.'/'.AREA.'/Views/'.$classController.'/'.$actionFunction.'.php';
			}
			//echo $pathCom;
			if(file_exists($pathSub)){
				BaseClass::SetSession('_pageBody',$pathSub);
				ViewLoader::LoadLayout($layout);
				return true;
			}elseif (file_exists($pathCom)) {
				BaseClass::SetSession('_pageBody',$pathCom);
				ViewLoader::LoadLayout($layout);
				return true;
			}
			return false;
		}

		public static function LoadNoneLayout($path='',$rule=false){
			
			//echo $actionFunction;
			$pathCom = PATH_APP.'/Common/Views/'.$path;
			$pathSub = PATH_APP.'/'.AREA.'/Views/'.$path;
			if($path ===''){
				$level = 2;
				if($rule){
					$level = 3;
				}
				extract(ViewLoader::AutoGetControllerAndAction($level));
				$pathCom = PATH_APP.'/Common/Views/'.$classController.'/'.$actionFunction.'.php';
				$pathSub = PATH_APP.'/'.AREA.'/Views/'.$classController.'/'.$actionFunction.'.php';
			}
			if(file_exists($pathSub)){
				require $pathSub;
				return true;
			}elseif (file_exists($pathCom)) {
				require $pathCom;
				return true;
			}
			return false;
		}

		public static function LoadLayout($name){
			$pathCom = PATH_APP.'/Common/Views/_Layout/'.$name.'.php';
			$pathSub = PATH_APP.'/'.AREA.'/Views/_Layout/'.$name.'.php';

			if(file_exists($pathSub)){
				include_once $pathSub;

				return true;
			}elseif (file_exists($pathCom)) {
				include_once $pathCom;
				return true;
			}
			ErrorBase::doLog('Không load đc layout!');
			//echo "Không load đc layout!";
			return false;
		}
		private static function AutoGetControllerAndAction($level){
			$classController = str_replace('Controller','',debug_backtrace()[$level]['class']);
			$actionFunction = debug_backtrace()[$level]['function'];
			return array('classController'=>$classController,'actionFunction'=>$actionFunction);
		}
		public static function LoadAdmin($path=''){
			return ViewLoader::Load('_AdminLayout',$path,true);
		}
		public static function LoadUser($path=''){
			return ViewLoader::Load('_HomeLayout',$path,true);
		}
	}
?>