<?php 
	session_start();
	// load file controller
	include "../app/Controller.php";
	// load file connection
	include "../app/Connection.php";
	//--
	// Lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"Demo";
	//lay bien action truyen tu url
	$action = isset($_GET["action"]) ? $_GET["action"]:"index";
	// ghep thanh duong dan file controller vat li
	$fileController = "controllers/".ucfirst($controller)."Controller.php";
	//ten class 
	$classController = ucfirst($controller)."Controller";
	//load fie controller 
	include $fileController;
	// kiem tra xem class ton tai hay ko, neu co thi khoi tao
	if (class_exists($classController)){
		$obj = new $classController();
		$obj->$action();
	} else die("$fileController không tồn tại");
	//--
 ?>