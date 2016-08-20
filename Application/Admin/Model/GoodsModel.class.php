<?php 
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
	//自动验证的数组
	protected $_auto  = array(
		//array('status','1'),

		array('pic','dealPic' ,1,'function'),

		//array('phoneColor',' dealColor' ,3,'function'),

		);
	protected $_validate = array(
 		array('phoneName','require','商品标题必须！'), //默认情况下用正则进行验证
 		array('phoneName','','手机标题已经存在！',0,'unique',1), 
 		 
 		array('price','require','价格必须！'), //默认情况下用正则进行验证
 		array('price','is_numeric','价格必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		 
 		array('preprice','require','原价格必须！'), //默认情况下用正则进行验证
 		array('preprice','is_numeric','原价格必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		
            
                array('stock','require','库存必须！'), //默认情况下用正则进行验证
 		array('stock','is_numeric','必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
            
 		array('screenSize','require','屏幕尺寸必须！'), //默认情况下用正则进行验证
 		array('screenSize','is_numeric','屏幕尺寸必须为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		
 		
 		
 		
	);

	


}

 ?>