<?php
namespace Admin\Controller;
use Think\Controller;
class PicController extends Controller {
    public function add(){
    	$hostId = I('get.hostId');
    	$fenlei = I('get.fenlei');
    	if($fenlei == 0){
	    	$phone = M('goods');
	    	$hosts=$phone->field('phonename name,phonecolor')->where('id='.$hostId)->find();
    		$color= explode(',',$hosts['phonecolor']);
    		foreach($color as $v){
    			$style = M('type');
    			$colors[$v]=$style->where('id='.$v)->getField('name');
    		}
 			$this->assign('colors',$colors);
 			//ar_dump($colors);die;
    	}
    	if($fenlei == 1){
	    	$part = M('part');
	    	$hosts['name']=$part->where('id='.$hostId)->getField('partname');
	    }	
    	
		$this->assign('hostName',$hosts['name']);
		$this->assign('hostId',$hostId);
		$this->assign('fenlei',$fenlei);
		
        $this->display();
    }
    public function insert(){
		$pic = D('pic');
		if($_FILES['pic']['error']==4){
			$this->error('请上传图片','',9);
		}
		if($_POST['fenlei'] == 0&&$_POST['color'] == 0&&$_POST['yongtu']== 0){
			$this->error('请选择手机颜色',U('Admin/Pic/add',array('hostId'=>$_POST['hostId'],'hostName'=>$_POST['hostName'],'fenlei'=>$_POST['fenlei'])));
		
			//$_POST['hostName']=$phone->where('id='.$_POST['hostId'])->getField('phoneName');
		}
		//var_dump($_POST['fenlei']);die;
		//if($_FILES['pic']['error'] == 0){
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize   =     12345678 ;// 设置附件上传大小    
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->rootPath = './Public';//手动设置文件上传根目录
			$upload->savePath  =      '/Uploads/phone/detail/'; // 设置附件上传目录    // 上传文件     
			$infos = $upload->upload();
			
			if(!$infos) {// 上传错误提示错误信息
				//var_dump($upload->getError()) ;       
				$this->error($upload->getError(),'',3);    
			}else{// 上传成功  
				foreach($infos as $k=>$v){
					$_POST['pic']=ltrim($upload->rootPath,'.').$infos[$k]['savepath'].$infos[$k]['savename'];
					if(!$pic->create()){
						$this->error($pic->getError(),'',3);
					}else{
						$res = $pic->add();
						if(!res){
							$this->error($pic->_sql(),'',3);

						}
					}
				}
				
			}
		$this->success('添加成功',U('Admin/Pic/index',array('fenlei'=>$_POST['fenlei'])),1);
		die;
			
		if(!$pic->create()){
			//var_dump($part->create());
			$this->error($pic->getError(),'',3);

			
		}else{
			//var_dump($pic ->create());die;
			if($pic->add()){
				$this->success('添加成功',U('Admin/Pic/index',array('fenlei'=>$_POST['fenlei'])),99);
			}else{
				$this->error($pic->_sql(),U('Admin/Pic/add', array('hostId'=>$_POST['hostId'],'fenlei'=>$_POST['fenlei'])),99999);
				
			}
		}
	}
	
	public function index(){
		$fenlei=I('get.fenlei');
		//创建对象
		$pic = M('pic');
		
		//获取关键字
		
		
		if(!empty($_GET['keyword'])){
			//建议使用数组形式来创建where条件
			// $where = "username like '%".$_GET['keyword']."%'";
			$where['hostName'] = array('like','%'.$_GET["keyword"].'%');
			$where['fenlei'] = array('eq',$fenlei);
			// $where['username'] = array('eq','admin');
			// $where['age'] = array('lt',18);
		}else{
			$where = "";
			$where['fenlei'] = array('eq',$fenlei);
		}
		//统计总数
		$count = $pic->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$pics= $pic->limit($limit)->where($where)->order('hostName,yongtu,xu')->select();
		//分配变量
		//var_dump($phones);
		//var_dump($pages);
		//在属性表里把属性id换成属性值()
		foreach($pics as $k=>$v){
			if($v['color'] == 0){
				$pics[$k]['color']='不区分颜色';
			}else{
				$style=M('type');
				$pics[$k]['color'] = $style->where('id='.$v['color'])->getField('name');
			}
		}

		//var_dump($style->_sql());die;
		$this->assign('pics', $pics);
		//var_dump($pic->_sql());die;
		$this->assign('pages',$pages);//
		$this->assign('num',$num);//
		$this->assign('keyword',$_GET['keyword']);//
		$this->display();
	}
   	public function delete(){
		//获取id
		$id = I('get.id');
		$pic=M('pic');
		$fenlei=$pic->where('id='.$id)->getField('fenlei');
		$res=$pic->where('id='.$id)->getField('pic');
		unlink('.'.$res);
		 
		$res=$pic->where('id='.$id)->delete();
		if($res){
			
			$this->redirect('Admin/Pic/index',array('fenlei'=>$fenlei));
		}else{
			
			$this->success('删除失败',U('Admin/Pic/index',array('fenlei'=>$fenlei)),3);
		}
	}
	public function edit(){

		//创建对象
		$pic = M('pic');
		//获取id
		$id = I('get.id');
		//读取数据
		$picd = $pic->where('id='.$id)->find();
		//获取最后一条sql语句
		// echo $user->_sql();//$user->getLastSql();
		//处理爱好字段

		if($picd['feilei'] == 0) {
	    	$phone = M('goods');
	    	
	    	$color=$phone->where("id=".$picd['hostid'])->getField('phoneColor');
    		
                $color= explode(',',$color);

    		foreach($color as $k=>$v){
    			$style = M('type');
    			$colors[$v]=$style->where('id='.$v)->getField('name');
                        
    		}

 			$this->assign('colors',$colors);
 			//ar_dump($colors);die;
    	}
		
		
		
		$this->assign('picd', $picd );
		//解析模板
		$this->display();
	}
	//更新操作
	public function update(){
		//更新主表
		//var_dump($_FILES);
		$pic = D('pic');
		$fenlei = $pic ->where('id='.$_POST['id'])->getField('fenlei'); 
		if($_FILES['pic']['error'] == 0){
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize   =     3145728 ;// 设置附件上传大小    
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->rootPath = './Public';//手动设置文件上传根目录
			$upload->savePath  =      '/Uploads/'; // 设置附件上传目录    // 上传文件     
			$infos = $upload->upload();
			//var_dump(22);
			if(!$infos) {// 上传错误提示错误信息
				//var_dump($upload->getError()) ;       
				$this->error($upload->getError(),'',3);    
			}else{// 上传成功  

				$_POST['pic'] = ltrim($upload->rootPath,'.').$infos['pic']['savepath'].$infos['pic']['savename'];
			}
		}
		if($pic ->create()){
		
			if($pic ->save()){
				// if($_POST['pic']['error']==0){
				// 	@unlink('.'.$pic);
				// }
				 
				$this->success('更新成功',U('Admin/Pic/index',array('fenlei'=>$fenlei)),1);
			}else{
				$this->error ('更新失败',U('Admin/Pic/index',array('fenlei'=>$fenlei)),3);
			}
		}else{
			
				$this->error($pic ->getError(),U('Admin/Gift/index',array('fenlei'=>$fenlei)),3);
		}
	}
}
