<?php 
	/* None class */
	/**
	 * Chuyển hướng View và Layout
	* Dành cho các trang sử dụng layout 
	*/
	class HomeLayout{

		public static function View(){
			//Get PageBody
			$root = 'Views';
			$classController = str_replace('Controller','',debug_backtrace()[1]['class']);
			$actionFunction = debug_backtrace()[1]['function'];

			$_pageBody = $root.'/'.$classController.'/'.$actionFunction.'.php';
			
			require $root.'/'.'_Layout/_HomeLayout.php';
		}
		/**
		 * Require 1 View chỉ cần Link tương đối bắt đầu từ Views làm ROOT
		 * @param [string] $urlView [Link tương đối của View]
		 */
		public static function Redirect($urlView){
			$_pageBody = 'Views/'.$urlView;
			require 'Views/_Layout/_HomeLayout.php';
		}
	}
	class AdminLayout{
		public static function View(){
			$root = 'Views';

			$classController = str_replace('Controller','',debug_backtrace()[1]['class']);
			$actionFunction = debug_backtrace()[1]['function'];
			$_pageBody = $root.'/'.$classController.'/'.$actionFunction.'.php';
			
			require $root.'/'.'_Layout/_AdminLayout.php';
		}
		/**
		 * Require 1 View chỉ cần Link tương đối bắt đầu từ Views làm ROOT
		 * @param [string] $urlView [Link tương đối của View]
		 */
		public static function Redirect($urlView){
			$_pageBody = 'Views/'.$urlView;
			require 'Views/_Layout/_AdminLayout.php';
		}
	}
	class NoneLayout{

		public static function View(){
			
			$classController = str_replace('Controller','',debug_backtrace()[1]['class']);
			$actionFunction = debug_backtrace()[1]['function'];
			//ErrorBase::doLog("NoneLayout url: ".$root.'/'.$classController.'/'.$actionFunction.'.php');
			require 'Views/'.$classController.'/'.$actionFunction.'.php';
		
		}
		/**
		 * Require 1 View chỉ cần Link tương đối bắt đầu từ Views làm ROOT
		 * @param [string] $urlView [Link tương đối của View]
		 */
		public static function Redirect($urlView){
			require 'Views/'.$urlView;
		}
	}
	class Layout{
		public static function Redirect($urlView, $Layout){
			$_pageBody = 'Views/'.$urlView;
			require 'Views/'.'_Layout/'.$Layout.'.php';
		}
	}

	/**
	 * Chuyển hướng đến 1 action bằng link
	 */
	function RedirectToAction($Url){
		return header("location:/"._ROOT."/".$Url);
	}
?>