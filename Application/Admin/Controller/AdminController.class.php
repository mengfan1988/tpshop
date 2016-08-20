<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {
	public function index(){
		// // S('name','cc',10);
	// // $name=S('name');
	// // $this->assign('name',$name);
	// // C('name','nnnnnnn');
	// // $this->display();
	
	}
	public function add(){
		think_send_mail('340562435@qq.com','340562435@qq.com','mengfan','mengfan！');
		$this->display();
	}
}

?>