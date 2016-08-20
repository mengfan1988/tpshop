<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {

	//生成验证码
	public function verify(){
		ob_clean;
		$config =    array(
                    'fontSize'    =>    30,    // 验证码字体大小
                    'length'      =>    3,     // 验证码位数
                    'useNoise'    =>    false, // 关闭验证码杂点
                );
                    $Verify =     new \Think\Verify($config);
                    $Verify->entry();

		
	}

}