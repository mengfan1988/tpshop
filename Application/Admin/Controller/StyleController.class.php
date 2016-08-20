<?php
namespace Admin\Controller;
use Think\Controller;
class StyleController extends Controller {
	
	
		
	public function index(){
		//创建对象
		$style = M('type');
		
		$styles= $style->where("pid='0'")->select();
		//var_dump($style->_sql());
		//var_dump($styles);die;
		foreach($styles as $k=>$v){
			$styles[$k]['value']=$style->where("pid=$v[id]")->select();
			//var_dump($value);
		}
		
		

		$this->assign('styles', $styles);

		$this->display();
	}
	
	public function add(){
		$this->display();
	}
	public function insert(){
		$style = M('type');
		$_POST['pid']=0;
		$_POST['path']=0;
		
		
		if($style->create()){
			$res=$style->add();
			
		}
		if($res){
	 		$zhi['name']=$_POST['zhi'];
	 		$zhi['pid']=$res;
			$zhi['path']='0,'.$zhi['pid'];
			$res2=$style->add($zhi);
			
			if($res2){
				$this->success('添加成功',U('Admin/Style/index'),3);
			}else{
				$this->error('添加失败','',3);
			}
		}
		
		
	}

}