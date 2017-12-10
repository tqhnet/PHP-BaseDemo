<?php
//后台首页控制器
class IndexController extends Controller{

	public function indexAction(){
		include CUR_VIEW_PATH . "index.html";
	}

	public function topAction(){
		include CUR_VIEW_PATH . "top.html";
	}

	public function mainAction(){
		include CUR_VIEW_PATH . "main.html";

		$this->helper("input");
		f1();

		$adminModel = new AdminModel("admin");
		$admins = $adminModel->test();
		echo "<pre>";
		var_dump($admins);
		echo ">/pre>";
	}

	public function menuAction(){
		include CUR_VIEW_PATH . "menu.html";
	}

	public function dragAction(){
		include CUR_VIEW_PATH . "drag.html";
	}
}