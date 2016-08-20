<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function index(){
		$order = M('order');
		
		if(!empty($_GET['keyword'])){
			$where['huishou'] =array('eq',$_GET['huishou']);
			
			$where['orderNum'] = array('like','%'.$_GET["keyword"].'%');
			
		}else{
			$where['huishou'] =array('eq',$_GET['huishou']);
			
		}

		//统计总数
		$count = $order->where($where)->count();
		//获取每页显示的数量
		$num = !empty($_GET['num']) ? $_GET['num'] : 10;
		//实例化分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//获取页码信息(页码字符串)
		$pages = $page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//读取数据库信息
		$res= $order->limit($limit)->where($where)->order('time desc')->select();
		// var_dump($order->_sql());die;
		$this->assign('order',$res);
		$this->assign('huishou',$_GET['huishou']);
		$this->display();
	}
	public function detail(){
		$order = M('order');
		$detail = M('odetail');
		$phone = M('goods');
		$style=M('type');
		$part = M('part');
		$gift = M('gift');
		$address = M('address');
		$xingxi = $order->where('id='.$_GET['id'])->find();
		$goods = $detail->where('orderNum="'.$_GET['ordernum'].'"')->select();
		$dizhi = $address->where('id='.$xingxi['addressid'])->find();
		
		foreach($goods as $k=>$v){
			if($v['fenlei'] == 0){
				$goods[$k]['good'] = $phone->where('id='.$v['goodid'])->find();
				$zwhere['phoneId'] = array('eq',$v['goodid']);
				$zwhere['gm'] = array('eq',0);
				$zengpincount =  $gift->where($zwhere)->count();
				
				if($zengpincount){

					$zengpin =  $gift->where($zwhere)->getField('partId',true);
					$zengArr=[];
					foreach($zengpin as $zk=>$zv){
						$zengArr[]=$part->where('id='.$zv)->find();
						

					}
					$goods[$k]['zeng']=$zengArr;
				}

			}else{
				$goods[$k]['good'] = $part->where('id='.$v['goodid'])->find();

			}
			if(!empty($v['mealid'])){
				$meal = $gift->where('id = '.$v['mealid'])->getField('partId');
				$goods[$k]['meal'] = $part->where('id='.$meal)->find();
			}

		}
		$this->assign('xingxi',$xingxi);
		$this->assign('dizhi',$dizhi);
		$this->assign('goods',$goods);
		// var_dump($goods);
		$this->display();
	}
	public function editWuliu(){
		$order = M('order');
		if($order->create()){
			$res = $order->save();
			if($res){
				$this->success('修改成功','','3');
			}else{
				$this->error('修改失败','','3');

			}
		}
	}
	public function huishou(){
		$order = M('order');
		if($_GET['huishou']==0){
			$order-> where('id='.$_GET['id'])->setField('huishou',1);//只更新个别字段
			$this->success('成功',U('Admin/Order/index',array('huishou'=>1)));
		}else{
			$order-> where('id='.$_GET['id'])->setField('huishou',0);
			$this->success('成功',U('Admin/Order/index',array('huishou'=>0)));

		}
	}
	public function del(){
		$m = new \Think\Model();
		$m->startTrans();//开启事物

		$res1 = $m->table('vivo_order')->where('id='.$_GET['id'])->delete();
		$res2 = $m->table('vivo_odetail')->where('orderNum="'.$_GET['orderNum'].'"')->delete();
		
		if($res1 && $res2){
			$m->commit();
			$this->success('删除成功','',3);
		}else{
			$m->rollback();
			$this->success('删除失败','',3);

		}
	}
}