<?php 
	//echo __DIR__;
	class GioHangController{
		public function __construct(){
			ModelLoader::Load('OrderDetailModel');
		}
		public function Index(){
			$gh = BaseClass::GetSession('GioHang');
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;

			if($id > 0){
				$flag = false;

				if($gh !== ''){
					for ($i=0; $i < $gh->Quantity; $i++) { 
						$key = $gh->DataList[$i];
						//echo $key['idP'];
						if($key["id"] == $id){
							$flag = true;
							$gh->DataList[$i]['total'] = ++$key['total'];
						}
					}
				}
				if($flag === false){
					$gh->DataList[] = array("id"=>$id, "total"=>1);
					$gh->Quantity = count($gh->DataList);
					echo $gh->Quantity;
				}
				
				BaseClass::SetSession('GioHang', $gh);
				
				RedirectToAction('GioHang/Index');
				//session_destroy();
			}
			return ViewLoader::LoadMain();
		}
		public function DeleteOne(){
			$id = BaseClass::GetValuePost('id');
			if($id > 0){
				$gh = BaseClass::GetSession('GioHang');
				BaseClass::SetSession('GioHang', '');
				for ($i=0; $i < $gh->Quantity; $i++) { 
					$key = $gh->DataList[$i];
					//echo $key['idP'];
					if($key["id"] == $id){
						$y = $i;
						if($y === 0){
							array_splice($gh->DataList, 0, 1);
						}else{
							array_splice($gh->DataList, $i, $i);
						}
						$gh->Quantity = count($gh->DataList);
						BaseClass::SetSession('GioHang', $gh);
						die(json_encode(array('Msg'=>'Thao tác Thành công!')));
					}
				}

			}
			die(json_encode(array('Msg'=>'Thao tác Thất bại!')));
		}
		public function UpdateS(){
			BaseClass::SetSession('GioHang', '');
			$temp = array();
			$tempgh = json_decode(BaseClass::GetValuePost("dataPs"));
			$gh = new stdClass();
			foreach ($tempgh as $key) {
				array_push($temp, (array)$key);
			}
			$gh->DataList = $temp;
			$gh->Quantity = count($gh->DataList);
			BaseClass::SetSession('GioHang', $gh);
			if(BaseClass::GetSession('GioHang') !==''){
				die(json_encode(array('Msg'=>'Thao tác Thành công!')));
			}
			die(json_encode(array('Msg'=>'Thao tác Thất bại, mất hết giỏ hàng!')));
			// die(json_encode(var_dump($temp)));
		}

		public function DatHang(){
			if(BaseClass::GetValuePost('submit') !== ''){
				$order = new stdClass();
				$order->Name = BaseClass::GetValuePost('name');
				$order->Email = BaseClass::GetValuePost('mail');
				$order->PhoneNum = BaseClass::GetValuePost('mobi');
				$order->Address = BaseClass::GetValuePost('addr');
				
				$model1 = new OrderDetailModel();
				$_rs = $model1->InsertGioHang($order);
				if($_rs){
					BaseClass::SetSession('GioHang','');
				}
				return RedirectToAction('GioHang/Index');
			}
			return ViewLoader::LoadMain();
		}
		public function TimGioHang(){
			$mode = BaseClass::GetValuePost('mode');
			$keyS = BaseClass::GetValuePost('keyS');
			$model = new OrderDetailModel();
			$rs = $model->GetListSearch($mode, $keyS);
			if($rs){
				BaseClass::SetValuePost('rsearch',$rs);
				ViewLoader::LoadNoneLayout();
			}
		}
	}
 ?>