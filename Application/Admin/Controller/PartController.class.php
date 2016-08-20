<?php
namespace Admin\Controller;
use Think\Controller;
class PartController extends Controller {
    public function add(){
    	//把颜色值区出来
    	$style = M('type');
		$color = $style->where("name='颜色'")->find();
		$colorzhi = $style->where("pid=".$color['id'])->select();
		//型号的值取出来
		$type = $style->where("name='机型'")->find();
		$typezhi = $style->where("pid=".$type['id'])->select();
		//配件按应用分类

		$app = $style->where("name='配件分类'")->find();
		$appzhi = $style->where("pid=".$app['id'])->select();
		$this->assign('colorzhi', $colorzhi);
		$this->assign('appzhi', $appzhi);
		$this->assign('typezhi', $typezhi);
        $this->display();
    }
    public function insert(){
		//创建对象
		if(empty($_POST['partColor'])){
			$this->error('颜色不能为空','',3);
		}
		if($_FILES['pic']['error']==4){
			$this->error('配件主图不能为空','',3);
		}
		
		if($_FILES['pic']['error'] == 0){
                        $_POST['pic'] =dealPic2('Part/');
		}
		
		if(!empty($_POST['type'])){
			$_POST['type'] = implode(',', $_POST['type']);
 		}
		
		
 		$_POST['time']=time();
 		$part = D('part');
		if(!$part->create()){
			$this->error($part->getError(),'',3);	
		}else{
			if($part->add()){
				$this->success('添加成功',U('Admin/Part/index'),1);
			}else{
				$this->error('添加失败',U('Admin/Part/index'),3);
			}
		}
	}
	public function index(){
		//创建对象
		$part = M('part');
		//获取关键字
		if(!empty($_GET['keyword'])){
			$where['sx']=array('eq','0');
			$where['partName'] = array('like','%'.$_GET["keyword"].'%');
		}else{
			$where['sx']=array('eq','0');
			//$where = "";
		}
		//统计总数
		$count = $part->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$parts= $part->where($where)->order('time desc')->limit($limit)->select();
		//分配变量
		//var_dump($phones);
		//var_dump($parts);
		//在属性表里把属性id换成属性值()
		$style=M('type');
		foreach( $parts as $k=>$v){
			
                        $parts[$k]['app']=$style->where("id=".$v['app'])->getField('name');
                        //dump($v['app']);
			$parts[$k]['partcolor']=$style->where("id=".$v['partcolor'])->getField('name');
                        //dump($v['partcolor']);
			$type=explode(',',$v['type']);
			$parts[$k]['type']='';
			foreach($type as $y){
                                $parts[$k]['type'].=$style->where(["id='{$y}'"])->getField('name').',';      
			}
			$parts[$k]['type']=rtrim($parts[$k]['type'],',');
                       
		}
		//var_dump($parts);die;
		$this->assign('parts', $parts);
		$this->assign('pages',$pages);
		$this->assign('num',$num);
		$this->assign('keyword',$_GET['keyword']);
		$this->display();
	}
   	public function delete(){
		//获取id
		$id = I('get.id');
		$part=M('part');
		$gift = M('gift');
		$res=$part->where('id='.$id)->getField('pic');
		unlink('.'.$res);
		$res=$part->where('id='.$id)->delete();
		$res2=$gift->where('partId='.$id)->delete();

		if($res){
			
			$this->redirect('Admin/part/index');
		}else{
			
			$this->error('删除失败',U('Admin/part/index'),3);
		}
	}
	public function edit(){

		//创建对象
		$part = M('part');
		//获取id
		$id = I('get.id');//44
		//读取数据
		$part = $part->where('id='.$id)->find();
		//获取最后一条sql语句
		// echo $user->_sql();//$user->getLastSql();
		//处理爱好字段
		
		$types = explode(',', $part['type']);
		//分配变量
		$style = M('type');
		$color = $style->where("name='颜色'")->find();
		$colorzhi = $style->where("pid=".$color['id'])->select();
		//型号的值取出来
		$type = $style->where("name='机型'")->find();
		$typezhi = $style->where("pid=".$type['id'])->select();
		//配件按应用分类

		$app = $style->where("name='配件分类'")->find();
		$appzhi = $style->where("pid=".$app['id'])->select();
		$this->assign('colorzhi', $colorzhi);
		$this->assign('appzhi', $appzhi);
		$this->assign('typezhi', $typezhi);
		//var_dump($part);
		$this->assign('part', $part);
		
		$this->assign('types', $types);
		//解析模板
		$this->display();
	}
	//更新操作
	public function update(){
		//更新主表
		//var_dump($_FILES);
		$part = D('part'); 
		$pic=$part->where('id='.$_POST['id'])->getField('pic');
		$pN=$part->where('id='.$_POST['id'])->getField('partName');
		if($pN != $_POST['partName']){
			$gift = M('gift');
			$data['partName']=$_POST['partName'];
			$gift -> where("partName ='$pN'")->save($data);
		}
		// if($_FILES['pic']['error']==4){
		// 	$_POST['pic']=$pic;
		// }
		if($_FILES['pic']['error'] == 0){
			$_POST['pic']=dealPic2('Part/');
		}
		
		if(!empty($_POST['type'])){
			$_POST['type'] = implode(',', $_POST['type']);
 		}
		if($part->create()){
		
			if($part->save()){
				// if($_POST['pic']['error']==0){
				// 	@unlink('.'.$pic);
				// }
				 
				$this->success('更新成功',U('Admin/Part/index'),1);
			}else{
				$this->error ('更新失败',U('Admin/Part/index'),3);
			}
		}else{
			
				$this->error($part->getError(),U('Admin/Part/index'),3);
		}
	}
	public function xiajia(){
		$id = I('get.id');
		$part = M('part');
		$data['sx'] = 	1;
		$res = $part->where('id='.$id)->save($data); 
		if($res){
			$this->success('下架成功',U('Admin/Part/xjIndex'),1);

		}else{
			$this->error('下架失败',U('Admin/Part/index'),3);

		}
	}
	public function shangxian(){
		$id = I('get.id');
		$part = M('part');
		$data['sx'] = 	0;
		$res = $part->where('id='.$id)->save($data); 
		if($res){
			$this->success('上线成功',U('Admin/Part/index'),1);

		}else{
			$this->error('下架失败',U('Admin/Part/xjIndex'),1);

		}
	}
		public function xjIndex(){
		//创建对象
		$part = M('part');
		//获取关键字
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['sx']=array('eq','1');
			$where['partName'] = array('like','%'.$_GET["keyword"].'%');
			// $where['username'] = array('eq','admin');
			// $where['age'] = array('lt',18);
		}else{
			$where['sx']=array('eq','1');
			//$where = "";
		}
		//统计总数
		$count = $part->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$parts= $part->limit($limit)->where($where)->select();
		//分配变量
		//var_dump($phones);
		//var_dump($pages);
		//在属性表里把属性id换成属性值()
		$style=M('type');
		foreach($parts as $k=>$v){
			
			$parts[$k]['app']=$style->where('id='.$v['app'])->getField('name');
			$parts[$k]['partColor']=$style->where('id='.$v['partcolor'])->getField('name');

			$type=explode(',',$v['type']);
			$parts[$k]['type']=null;
			foreach($type as $x=>$y){
                                $parts[$k]['type'].=$style->where(["id='{$y}'"])->getField('name').',';
			}
			$parts[$k]['type']=rtrim($parts[$k]['type'],',');
			
			
			
		}
		//var_dump($parts);die;
		$this->assign('parts', $parts);
		$this->assign('pages',$pages);//
		$this->assign('num',$num);//
		$this->assign('keyword',$_GET['keyword']);//
		$this->display();
	}
}
