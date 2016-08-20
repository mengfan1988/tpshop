<?php
	/*
		unlink()//删除文件
		rmdir();//删除文件夹,只能删除空文件夹
	
	
	var_dump(rmdir("./abc/"));
	var_dump(rmdir("./root/"));
	删除非空文件夹
*/
	// $file_arr = scandir("./root/");
	// if(count($file_arr)==2){
		// rmdir("./root/");//如果是空目录直接删除
	// }else{
		// foreach($file_arr as $v){
			// if($v=="."||$v==".."){continue;}
			// if(is_dir("./root/$v/")==true){
				// rmdir("./root/$v/");
			// }else{
				// unlink("./root/$v");
			// }
		// }
		// rmdir("./root/");
	// }
	$dir='D:\tpshop';
	function my_scandir($dir)
{
     $files = array();
     if ( $handle = opendir($dir) ) {
         while ( ($file = readdir($handle)) !== false ) {
             if ( $file != ".." && $file != "." ) {
                 if ( is_dir($dir . "/" . $file) ) {
                     $files[$file] = scandir($dir . "/" . $file);
					 $files[$file]=array_slice($files[$file],2);//去除.  ..
                 }else {
                     $files[] = $file;
                 }
             }
         }
         closedir($handle);
         return $files;
     }
}
var_dump(my_scandir($dir));

?>