<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function goods_detail(){
      $this->display();
    }

    public function showGoods(){
    	$this->display();
    }
}