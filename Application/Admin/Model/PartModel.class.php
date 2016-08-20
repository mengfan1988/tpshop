<?php 
namespace Admin\Model;
use Think\Model;
class PartModel extends Model{
	//自动验证的数组
	// protected $_auto  = array(
	// 	//array('status','1'),

	// 	array('pic','dealPic' ,1,'function'),

		

	// 	);
	protected $_validate = array(
 		array('partName','require','商品标题必须！'), //默认情况下用正则进行验证
 		array('partName','','手机标题已经存在！',0,'unique',3), 
 		 
 		array('price','require','价格必须！'), //默认情况下用正则进行验证
 		array('price','is_numeric','价格必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		
                array('stock','require','数量必须！'), //默认情况下用正则进行验证
 		array('stock','is_numeric','必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		array('preprice','require','原价格必须！'), //默认情况下用正则进行验证
 		array('preprice','is_numeric','原价格必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		
 		
 		
 		
 		
 		
	);

	


}

 ?>