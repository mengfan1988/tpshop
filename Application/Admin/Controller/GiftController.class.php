<?php
namespace Admin\Controller;
use Think\Controller;
class GiftController extends Controller {
    public function add(){
    	$phone = M('goods');
    	$phones=$phone->field('id,phoneName')->select();
    	$part = M('part');
    	$parts =$part->field('id,partName')->select(); 
		$this->assign('phones',$phones);//
		$this->assign('parts',$parts);//
        $this->display();
    }
    public function insert(){
		$gift = D('gift');
		$phone = M('goods');
		$_POST['phoneName']=$phone->where('id='.$_POST['phoneId'])->getField('phoneName');
		$part = M('part');
		$_POST['partName']=$part->where('id='.$_POST['partId'])->getField('partName');

		if(!$gift->create()){
			//var_dump($part->create());
			$this->error($gift->getError(),'',3);

			
		}else{
			//var_dump($part ->create());die;
			if($gift->add()){
				
				$this->success('添加成功',U('Admin/Gift/index'),1);
			}else{
				 //var_dump($phone->_sql()) ;die();
				$this->error($part->_sql(),U('Admin/Gift/index'),3);
			}
		}
	}
	public function index(){
		//创建对象
		$gift = M('gift');
		
		//获取关键字
		
		
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['phoneName'] = array('like','%'.$_GET["keyword"].'%');
			// $where['username'] = array('eq','admin');
			// $where['age'] = array('lt',18);
		}else{
			$where = "";
		}
		//统计总数
		$count = $gift->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$gifts= $gift->limit($limit)->where($where)->order('phoneName,gm')->select();
		//分配变量
		//var_dump($phones);
		//var_dump($pages);
		//在属性表里把属性id换成属性值()
		
		//var_dump($parts);die;
		$this->assign('gifts', $gifts);
		
		$this->assign('pages',$pages);//
		$this->assign('num',$num);//
		$this->assign('keyword',$_GET['keyword']);//
		$this->display();
	}
   	public function delete(){
		//获取id
		$id = I('get.id');
		$gift=M('gift');
		$res=$gift->where('id='.$id)->delete();
		if($res){
			
			$this->redirect('Admin/gift/index');
		}else{
			
			$this->success('删除失败',U('Admin/gift/index'),3);
		}
	}
	public function edit(){

		//创建对象
		$gift = M('gift');
		//获取id
		$id = I('get.id');//44
		//读取数据
		$giftd = $gift->where('id='.$id)->find();
		//获取最后一条sql语句
		// echo $user->_sql();//$user->getLastSql();
		//处理爱好字段
		$phone = M('goods');
    	$phones=$phone->field('id,phoneName')->select();
    	$part = M('part');
    	$parts =$part->field('id,partName')->select(); 
		$this->assign('phones',$phones);//
		$this->assign('parts',$parts);//
		
		
		
		$this->assign('giftd', $giftd );
		//解析模板
		$this->display();
	}
	//更新操作
	public function update(){
		//更新主表
		//var_dump($_FILES);
		$gift = D('gift'); 
		$phone = M('goods');
		$_POST['phoneName']=$phone->where('id='.$_POST['phoneId'])->getField('phoneName');
		$part = M('part');
		$_POST['partName']=$part->where('id='.$_POST['partId'])->getField('partName');

		if($gift ->create()){
		
			if($gift ->save()){
				// if($_POST['pic']['error']==0){
				// 	@unlink('.'.$pic);
				// }
				 
				$this->success('更新成功',U('Admin/Gift/index'),3);
			}else{
				$this->error ('更新失败',U('Admin/Gift/index'),3);
			}
		}else{
			
				$this->error($gift ->getError(),U('Admin/Gift/index'),3);
		}
	}
}
