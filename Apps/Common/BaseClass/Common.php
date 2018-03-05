<?php 

	class ErrorBase{
		/**
		 * [Hàm ghi log]
		 * @param  [string] $msg [dữ liệu cần ghi log]
		 */
		public static function doLog($msg) {
			error_log(date('Y-m-d H:i:s')." log: " . $msg .PHP_EOL, 3, 'log.log');
		}
	}

	class BaseURI{
		/**
		 * [Hàm sử dụng lấy link hiện tại trên URL]
		 * @return [string] [URL hiện tại]
		 */
		public static function getBaseURL(){
			return sprintf(
				"%s://%s:%s/"._ROOT,
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER['SERVER_PORT']
			);
		}
	} 
	class MyUploadLB{

		public static function isImgFile($string)
		{
			$type1 = "ani.bmp.cal.fax.gif.img.jbg.jpe.jpeg.jpg.mac.pbm.pcd.pcx.pct.pgm.png.ppm.psd.ras.tga.tiff.wmf.3dm.3ds.max.obj.dds.pspimage.thm.tif.yuv.ai.eps.ps.svg";
			$arr1 = explode('.', $type1);
			$arr1 = array_unique($arr1);
			foreach ($arr1 as $key) {
				$key = "image/".$key;
				if($key === $string)
					return true;
			}
			return false;
		}
		
		/**
		 * Hàm hỗ trợ update ảnh
		 * @param {string} $Url [Đường dẫn folder muốn lưu: folder/folder1/]
		 * @param {string} $file [key of file in FormData]
		 */
		public static function UploadImage($file, $Url){
			$_ReturnData = new StdClass;
			//ECHO var_dump($_FILES['file']['name']);
			if(isset($_FILES[$file])){
				if($_FILES[$file]['name']!=null){//Người dũng đã chọn file
					//echo $_FILES['file']['name'];
					if(MyUploadLB::isImgFile($_FILES[$file]['type'])){//Kiểm tra là file ảnh
						if($_FILES[$file]['size'] > 15728640){
							//File quá lớn
							$_ReturnData->Status = -2;
							$_ReturnData->Msg = "File quá lớn!";
							return $_ReturnData;
						}
						else{
							// file hợp lệ, tiến hành upload
							$name = $_FILES[$file]['name'];
			                $path = $Url.$name; // file sẽ lưu vào thư mục data
			                $tmp_name = $_FILES[$file]['tmp_name'];
			                $type = $_FILES[$file]['type']; 
			                $size = $_FILES[$file]['size']; 
			                // Upload file
			                move_uploaded_file($tmp_name,$path);
			                
			                $_ReturnData->Status = 1;
			                $_ReturnData->Msg = "Upload ảnh thành công.";
			                $_ReturnData->Data = $path;
			                return $_ReturnData;
						}
					}
				}
			}
			//Chưa chọn file
			$_ReturnData->Status = -1;
			$_ReturnData->Msg = "Chưa chọn file.";
			return $_ReturnData;
			//die(json_encode(array('Status'=>-1)));
		}
	}
	
	class BaseClass{
		public static function GetValueGet($key){
			return isset($_GET[$key])? $_GET[$key] : '';
		}
		public static function GetValuePost($key){
			return isset($_POST[$key])? $_POST[$key] : '';
		}
		public static function SetValuePost($key, $value){
			$_POST[$key] = $value;
		}
		public static function GetMD5($pass){
			return md5($pass.'php');
		}
		public static function SetSession($key,$value){
			$_SESSION[$key] = $value;
		}
		public static function GetSession($key){
			return isset($_SESSION[$key])? $_SESSION[$key] : '';
		}
		public static function GetCookie($key){
			return isset($_COOKIE[$key])? $_COOKIE[$key] : '';
		}
		public static function SetDefine($key, $value){
			define($key, $value);
		}
		public static function CheckRequestMethod($method){
			return ($_SERVER['REQUEST_METHOD'] === $method)? true : false;
		}
	}


?>