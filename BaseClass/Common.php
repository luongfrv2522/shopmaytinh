<?php 
	class BaseURI{
		public static function getBaseURL(){
			return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],"/"
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
		
		public static function UploadImage($Url){
			$_ReturnData = new StdClass;
			//ECHO var_dump($_FILES['file']['name']);
			if(isset($_FILES['file'])){
				if($_FILES['file']['name']!=null){//Người dũng đã chọn file
					//echo $_FILES['file']['name'];
					if(MyUploadLB::isImgFile($_FILES['file']['type'])){//Kiểm tra là file ảnh
						if($_FILES['file']['size'] > 15728640){
							//File quá lớn
							$_ReturnData->Status = -2;
							$_ReturnData->Msg = "File quá lớn!";
							return $_ReturnData;
						}
						else{
							// file hợp lệ, tiến hành upload
							$name = $_FILES['file']['name'];
			                $path = $Url.$name; // file sẽ lưu vào thư mục data
			                $tmp_name = $_FILES['file']['tmp_name'];
			                $type = $_FILES['file']['type']; 
			                $size = $_FILES['file']['size']; 
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
?>