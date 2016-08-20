<?php
// $test='aaa';
// $abc=&$test;
// unset($test);
// echo $abc?$abc:'test2';
$url="http://www.sina.com.cn/abc/de/fg.php?id=1";

   // $arr = parse_url($url);
   // var_dump($arr);
   // $file = basename($arr['path']);
   // var_dump($file);
   // $ext = explode(".",$file);
   // //return $ext[1];
// echo __FILE__;
// var_dump($_SERVER['PHP_SELF']);
 // function getext($url) {
       // $w_param = pathinfo($url);
     // $str = $w_param['extension'];
     // list($type, $vars) = explode('?',$str);
      // var_dump($type);
	  // var_dump($vars);
// }
// getext($url);
// $a='abcdef';
// echo strrev($a);
// $c='';
// $count=strlen($a);
// for($i=$count;$i>=0;$i--){
	// $c.=$a{$i};
	
// }
// echo $c;
//echo gethostbyname('www.baidu.com');
$read=fopen('http://www.baidu.com','rb');
$con=stream_get_contents($read);
echo $con;