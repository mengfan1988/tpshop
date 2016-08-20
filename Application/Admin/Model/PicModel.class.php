<?php 
namespace Admin\Model;
use Think\Model;
class PicModel extends Model{
	//自动验证的数组
	// protected $_auto  = array(
	// 	//array('status','1'),

	// 	array('pic','dealPic' ,1,'function'),

		

	// 	);
	protected $_validate = array(
 		 
 		
 		 
 		array('xu','require','序列号必须！'), //默认情况下用正则进行验证
 		
 		array('xu','is_numeric','序列号为数字',0 ,'function',3,), //默认情况下用正则进行验证
 		
 		
 		
 		
 		
 		
 		
	);

	


}

 ?>