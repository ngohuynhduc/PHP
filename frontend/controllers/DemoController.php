<?php 
	//include file model
	include "models/DemoModel.php";
	class DemoController extends Controller{
		//su dung file model o day
		use DemoModel;
		
        public function __construct(){
			if (!isset($_SESSION["customer"]))
			 	header("location:index.php?controller=login");
			if(!isset($_SESSION["demoCart"]))
				$_SESSION["demoCart"] = array();
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function index(){
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("DemoView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//update ban ghi - trang thai GET
		public function addToCart(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$quantity = isset($_GET["quantity".$id]) ? $_GET["quantity".$id] : 0;
			//goi ham cartAdd tu model de them phan tu vao session array
			$this->addToCartModel($id,$quantity);
			//quay lai trang gio hang
			header("location:index.php?controller=demo");}
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de update du lieu
			$data = $this->modelGetRecord($id);
			$this->loadView("DemoDetails.php",['data' => $data]);	
		}
        public function showCart(){
            $this->loadView("DemoPayment.php");
        }
		public function deleteOnCart(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->cartDelete($id);
			$this->loadView("DemoPayment.php");
		}
		public function payment(){
			$tt = isset($_GET["tt"]) ? $_GET["tt"] : 0;
			$user = $this->getUser();
			$this->cartCheckOut($user->id, $tt);
			$_SESSION["demoCart"] = array();
			header("location:index.php?controller=demo");
		}
		public function search(){
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 100;
			//tinh tong so trang
			if(isset($_POST["tenSP"])){
				$isSearch = true;
				$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
				$data = $this->modelSearchRecord($recordPerPage);
				$this->loadView("DemoView.php",["data"=>$data, 'numPage' => $numPage, 'isSearch' => $isSearch]);
			}
			else {
				var_dump("123");
				die();
			}
		}
	}
 ?>