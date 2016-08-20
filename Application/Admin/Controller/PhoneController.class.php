<?php
namespace Admin\Controller;
use Think\Controller;
class PhoneController extends Controller{
    public function add(){		
            $style = M('type');
            //在属性表里把网络的值取出来
            $net = $style->where("name='网络'")->find();
            $netzhi = $style->where('pid='.$net['id'])->select();
            //把颜色值取出来
            $color = $style->where("name='颜色'")->find();
            $colorzhi = $style->where("pid=".$color['id'])->select();
            //系列的值取出来
            $series = $style->where("name='系列'")->find();
            $serieszhi = $style->where("pid=".$series['id'])->select();
            //型号的值取出来
            $type = $style->where("name='机型'")->find();
            $typezhi = $style->where("pid=".$type['id'])->select();
            $this->assign('netzhi', $netzhi);
            $this->assign('colorzhi', $colorzhi);
            $this->assign('serieszhi', $serieszhi);
            $this->assign('typezhi', $typezhi);
            $this->display();
	}
        public function insert(){
            //创建对象
            if(empty($_POST['phoneColor'])){
                    $this->error('颜色不能为空','',1);
            }
            //var_dump($_FILES['pic']);
            if($_FILES['pic']['error']==4){
                    $this->error('手机主图不能为空','',1);
            }
            if(!empty($_POST['phoneColor'])){
                    $_POST['phoneColor'] = implode(',', $_POST['phoneColor']);
            }
            $phone = D('goods');
            $_POST['registerDate'] = time();
//            $upload = new \Think\Upload();
//            $upload->rootPath  = './Uploads/';
//            $info   = $upload->upload();
//            $data['photo']=$info[0]['savepath'].$info[0]['savename'];
            //执行插入操作
            if(!$phone->create()){

                    $this->error($phone->getError(),'',3);
            }else{
                    if($phone->add()){
                            $this->success('添加成功',U('Admin/phone/index'),1);
                    }else{
                             //var_dump($phone->_sql()) ;die();
                            $this->error('添加失败',U('Admin/phone/index'),3);
                    }
            }
    }
		public function index(){
		//创建对象
		$phone = M('goods');
		//获取关键字
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['sx']=array('eq','0');
			$where['phoneName'] = array('like','%'.$_GET["keyword"].'%');
			// $where['username'] = array('eq','admin');
			// $where['age'] = array('lt',18);
		}else{
			$where['sx']=array('eq','0');
			//$where = "";
		}
		//统计总数
		$count = $phone->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$phones= $phone->where($where)->order('registerDate desc')->limit($limit)->select();
                //dump($phones);
		//分配变量
		//var_dump($phones);
		//var_dump($pages);
		//在属性表里把属性id换成属性值()
		$style=M('type');
		foreach( $phones as $k=>$v){			
			$phones[$k]['series']=$style->where("id=".$v['series'])->getField('name');
			$phones[$k]['type']=$style->where("id=".$v['type'])->getField('name');
			$phones[$k]['network']=$style->where("id=".$v['network'])->getField('name');
                        
			$color=explode(',',$v['phonecolor']);
			$phones[$k]['phonecolor']='';
			foreach($color as $y){
                                $phones[$k]['phonecolor'].=$style->where(["id='{$y}'"])->getField('name').',';
			}
			$phones[$k]['phonecolor']=rtrim($phones[$k]['phonecolor'],',');
                       
			
		}
		//var_dump($phones);die;
		$this->assign('phones', $phones);
		$this->assign('pages',$pages);//
		$this->assign('num',$num);//
		$this->assign('keyword',$_GET['keyword']);//
		$this->display();
                
	}
	public function edit(){

		//创建对象
		$phone = M('goods');
		//获取id
		$id = I('get.id');//44
		//读取数据
		$phone = $phone->where('id='.$id)->find();
                //dump($phone);
		//获取最后一条sql语句
		// echo $user->_sql();//$user->getLastSql();
		//处理爱好字段
		$phoneColor = explode(',', $phone['phonecolor']);
		//分配变量
		$style = M('type');
		//在属性表里把网络的值取出来
		$net = $style->where("name='网络'")->find();
		$netzhi = $style->where('pid='.$net['id'])->select();
		//把颜色值区出来

		$color = $style->where("name='颜色'")->find();
		$colorzhi = $style->where("pid=".$color['id'])->select();
		//系列的值取出来
		$series = $style->where("name='系列'")->find();
		$serieszhi = $style->where("pid=".$series['id'])->select();
		//型号的值取出来
		$type = $style->where("name='机型'")->find();
		$typezhi = $style->where("pid=".$type['id'])->select();
		// var_dump($netzhi);
		// var_dump($colorzhi);
		// var_dump($serieszhi);
		// var_dump($typezhi);
		$this->assign('netzhi', $netzhi);
		$this->assign('colorzhi', $colorzhi);
		$this->assign('serieszhi', $serieszhi);
		$this->assign('typezhi', $typezhi);
		
		$this->assign('phone', $phone);
		$this->assign('phoneColor', $phoneColor);
		//解析模板
		$this->display();
	}
	public function update(){
		//更新主表
		//var_dump($_FILES);
		$phone = D('goods'); 
		$pic=$phone->where('id='.$_POST['id'])->getField('pic');
		$pN=$phone->where('id='.$_POST['id'])->getField('phoneName');
		if($pN != $_POST['phoneName']){
			$gift = M('gift');
			$data['phoneName']=$_POST['phoneName'];
			$gift -> where("phoneName ='$pN'")->save($data);
		}
		
		if($_FILES['pic']['error'] == 0){
			$_POST['pic'] =dealPic2('Phone/');
		}
		if(!empty($_POST['phoneColor'])){
			$_POST['phoneColor'] = implode(',', $_POST['phoneColor']);
		}
		if($phone->create()){
		
			if($phone->save()){
				// if($_POST['pic']['error']==0){
				// 	@unlink('.'.$pic);
				// }
				 
				$this->success('更新成功',U('Admin/Phone/index'),1);
			}else{
				$this->error ('更新失败',U('Admin/Phone/index'),3);
			}
		}else{
			
			$this->error($phone->getError(),U('Admin/Phone/index'),3);
		}
	}
	//删除操作
	public function delete(){
		//获取id
		$id = I('get.id');
		$phone=M('goods');

		//把手机的主图删除
		$res=$phone->where('id='.$id)->getField('pic');
		unlink('.'.$res);
                //dump($res);

		//把手机删除
		$res=$phone->where('id='.$id)->delete();
		
		//把对应的套餐删除
		$gift = M('gift');
		$res2=$gift->where('phoneId='.$id)->delete();

		//把对应的手机图片删除
		$pic= M('pic');
		$where['hostId']=array('eq',$id);
		$where['fenlei']=array('eq',0);
		
		$res3=$pic->where($where)->count();
		if($res3){
			$pics= $pic->where($where)->getField('pic');
			foreach ($pics as  $v) {
				unlink('.'.$v);
			}
			$pics= $pic->where($where)->delete();
		}

		//删除评价 
		$assess= M('assess');
		$where2['pid']=array('eq',$id);
		$where2['fenlei']=array('eq',0);

		$res4=$assess->where($where2)->count();
		if($res4){
			$assessId= $assess->where($where2)->getField('id');
			foreach($assessId as $v){
				//删除回复
				$replays=0;
				$replay= M('replay');
				$replays += $replay->where('aid='.$v)->delete();
			}
		}
		$ass=$assess->where($where2)->delete();
		if($res){
			$this->success('删除成功','',1);
		}else{
			
			$this->error('删除失败','',3);
		}
	}
	public function xiajia(){
		$id = I('get.id');
		$phone = M('goods');
		$data['sx'] = 	1;//下线为1，上线为零
		$res = $phone->where('id='.$id)->save($data); 
		if($res){
			$this->success('下架成功',U('Admin/phone/xjIndex'),3);

		}else{
			$this->error('下架失败',U('Admin/phone/index'),3);

		}
	}
	public function shangxian(){
		$id = I('get.id');
		$phone = M('goods');
		$data['sx'] = 	0;
		$res = $phone->where('id='.$id)->save($data); 
		if($res){
			$this->success('上线成功',U('Admin/phone/index'),1);

		}else{
			$this->error('下架失败',U('Admin/phone/xjIndex'),3);

		}
	}
	public function xjIndex(){
		//创建对象
		$phone = M('goods');
		//获取关键字
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['sx']=array('eq','1');
			$where['phoneName'] = array('like','%'.$_GET["keyword"].'%');
			// $where['username'] = array('eq','admin');
			// $where['age'] = array('lt',18);
		}else{
			$where['sx']=array('eq','1');
			//$where = "";
		}
		//统计总数
		$count = $phone->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$phones= $phone->limit($limit)->where($where)->select();
		//分配变量
		//var_dump($phones);
		//var_dump($pages);
		//在属性表里把属性id换成属性值()
		$style=M('type');
		foreach($phones as $k=>$v){
			
			$phones[$k]['series']=$style->where("id=".$v['series'])->getField('name');
			$phones[$k]['type']=$style->where("id=".$v['type'])->getField('name');
			$phones[$k]['network']=$style->where('id='.$v['network'])->getField('name');
			$color=explode(',',$v['phonecolor']);
			$phones[$k]['phonecolor']=null;
			foreach($color as $y){
				$phones[$k]['phonecolor'].=$style->where(["id='{$y}'"])->getField('name').',';
			}
			$phones[$k]['phonecolor']=rtrim($phones[$k]['phonecolor'],',');
			
		}
		//var_dump($phones);die;
		$this->assign('phones', $phones);
		
		$this->assign('pages',$pages);//
		$this->assign('num',$num);//
		$this->assign('keyword',$_GET['keyword']);//
		$this->display();
	}
	
}
