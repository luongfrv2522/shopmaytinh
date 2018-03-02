<?php 
/****************************************************
	Class chứa các hàm Map từ database với obj cơ bản
*****************************************************/
	class BaseMap{
		///Map dữ liệu $DataArr vào 1 mảng kiểu $obj
		public static function MapToList($DataArr, $obj){
			$datalist = array();
			/*Lấy dữ liệu và đổ vào mảng*/
			while ($item = mysqli_fetch_assoc($DataArr)) {
				array_push($datalist, $item);
			}
			//PRINT var_dump($datalist);
			/*Lấy key và value*/
			$_DataResult = array();
			foreach ($datalist as $a) {
				$item = new $obj;
				foreach ($a as $key => $value) {
					$item->$key = $value;
				}
				array_push($_DataResult, $item);
			}
			foreach ($_DataResult as $a1) {
				foreach ($a1 as $key1 => $value1) {
					//PRINT $key1." = ".$value1."</br>";
				}
			}
			return $_DataResult;
		}
		///Map dữ liệu $DataArr vào kiểu $obj
		public static function MapToObject($Data, $obj){
			$item = new $obj();
			if($Data && mysqli_num_rows($Data)>0){
				$Data = mysqli_fetch_assoc($Data);
				//echo var_dump($Data);
				foreach ($Data as $key => $value) {
					//echo $key.'->'.$value.'<br>'	;
					$item->$key = $value;
				}
			}
			
			return $item;

		}
	}
?>