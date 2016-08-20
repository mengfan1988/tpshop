<?php
namespace Admin\Controller;
use Think\Controller;
class AssessController extends CommonController {
	
	
	
	//用户列表
	public function index(){
		//创建对象
		$fenlei = I('get.fenlei');
		$status = I('get.status');
		//var_dump($fenlei);
		$assess = M('Assess');
		//获取关键字
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['content'] = array('like','%'.$_GET["keyword"].'%');
			 $where['fenlei'] = array('eq',$fenlei);
			 
			 	$where['status'] = array('eq',$status);
		
			// 	$where['age'] = array('lt',18);
		}else{
			 $where['status'] = array('eq',$status);

			$where['fenlei'] = array('eq',$fenlei);
			//$where = "";
		}
		
		//统计总数
		$count = $assess->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$assesses = $assess->limit($limit)->where($where)->select();
		//分配变量
		foreach($assesses as $k => $v){
			$user = M('user');
			$assesses[$k]['uid']= $user->where('id='.$v['uid'])->getField('username');
			if($fenlei == 0){
				$phone = M('phone');
				$assesses[$k]['pid']= $phone->where('id='.$v['pid'])->getField('phoneName');
			}
			if($fenlei == 1){
				$part = M('part');
				$assesses[$k]['pid']= $part->where('id='.$v['pid'])->getField('partName');
			}
			if($v['pic'] != '0'){
				$assesses[$k]['pic'] =explode('#',$v['pic']);
			}
			$replay = M('replay');
			$assesses[$k]['count']= $replay->where('aid='.$v['id'])->count();
		}
		//var_dump($assesses);
		$this->assign('assesses', $assesses);
		$this->assign('status', $status);
		$this->assign('fenlei', $fenlei);
		$this->assign('pages',$pages);//
		$this->display();
	}

	
	public function delete(){
		$id = $_GET['id'];
		$assess = M('assess');
		$res = $assess->where('id='.$id)->delete(); 
		if($res){
			$this->success('删除成功','',3);

		}else{
			$this->error('删除失败','',3);
		}
	}

	
	public function pb(){
		$id = $_GET['id'];
		$data['status'] = 	1;
		$assess = M('assess');
		$res = $assess->where('id='.$id)->save($data); 
		//var_dump($res);die;
		if($res){
			$this->success('屏蔽成功',U('Admin/Assess/index',array('status'=>1,'fenlei'=>$_GET['fenlei'])),3);

		}else{
			$this->error('屏蔽失败','',3);

		}
	}
	function jp(){
		$id = $_GET['id'];
		$data['status'] = 	0;
		$assess = M('assess');
		$res = $assess ->where('id='.$id)->save($data); 
		if($res){
			$this->success('解屏成功',U('Admin/Assess/index',array('status'=>0,'fenlei'=>$_GET['fenlei'])),3);

		}else{
			$this->error('解屏失败','',3);

		}
	}
	
}