<?php 
namespace Admin\Model;
use Think\Model;
class GiftModel extends Model{
	//自动验证的数组
	// protected $_auto  = array(
	// 	//array('status','1'),

	// 	array('pic','dealPic' ,1,'function'),

		

	// 	);
	protected $_validate = array(
 		array('title','require','赠品标题必须！'), //默认情况下用正则进行验证
 		array('title','','赠品标题已经存在！',0,'unique',3), 
 		
 		 
 		array('num','require','赠品数量必须！'), //默认情况下用正则进行验证
 		
 		array('num','is_numeric','赠品数量为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		array('price','require','套餐价格必须！'), //默认情况下用正则进行验证
 		array('price','is_numeric','套餐价格为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		 
 		
 		
 		
 		
 		
 		
 		
	);

	


}

 ?>