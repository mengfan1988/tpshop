<?php 
	
	
function dealPic(){
	if($_FILES['pic']['error'] == 0){
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize   =     888888888888 ;// 设置附件上传大小    
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->rootPath = './Public';//手动设置文件上传根目录
			$upload->savePath  =      '/Uploads/Phone/'; // 设置附件上传目录    // 上传文件     
			$infos = $upload->upload();
			if(!$infos) {// 上传错误提示错误信息
				$upload->getError();       
				
			}else{// 上传成功        
				return ltrim($upload->rootPath,'.').$infos['pic']['savepath'].$infos['pic']['savename'];
			}
		}
		//var_dump($infos['img']['savename']);
}

function dealPic2($a){
	
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize   =     888888888 ;// 设置附件上传大小    
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->rootPath = './Public';//手动设置文件上传根目录
			$upload->savePath  =      '/Uploads/'.$a; // 设置附件上传目录    // 上传文件     
			$infos = $upload->upload();
			if(!$infos) {// 上传错误提示错误信息
				$upload->getError() ;       
				//$this->error($upload->getError(),'',1000000);    
			}else{// 上传成功        
				return ltrim($upload->rootPath,'.').$infos['pic']['savepath'].$infos['pic']['savename'];
			}
		
		//var_dump($infos['img']['savename']);
}
function think_send_mail($to, $name, $subject = '', $body = '', $attachment = null){

			$config = C('THINK_EMAIL');

			vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
			vendor('SMTP');
			$mail = new PHPMailer; //PHPMailer对象

			$mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码

			$mail->IsSMTP(); // 设定使用SMTP服务

			$mail->SMTPDebug = 0; // 关闭SMTP调试功能

			// 1 = errors and messages

			// 2 = messages only

			$mail->SMTPAuth = true; // 启用 SMTP 验证功能

			$mail->SMTPSecure = 'ssl'; // 使用安全协议

			$mail->Host = $config['SMTP_HOST']; // SMTP 服务器

			$mail->Port = $config['SMTP_PORT']; // SMTP服务器的端口号

			$mail->Username = $config['SMTP_USER']; // SMTP服务器用户名

			$mail->Password = $config['SMTP_PASS']; // SMTP服务器密码

			$mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);

			$replyEmail = $config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];

			$replyName = $config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];

			$mail->AddReplyTo($replyEmail, $replyName);

			$mail->Subject = $subject;

			$mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端"; 

			$mail->MsgHTML($body);

			$mail->AddAddress($to, $name);

			if(is_array($attachment)){ // 添加附件

			foreach ($attachment as $file){

			is_file($file) && $mail->AddAttachment($file);

			}

			}

			return $mail->Send() ? true : $mail->ErrorInfo;

			}
			// 评论显示替换表情标签
function reFace($str){
    for($i=1;$i<76;$i++){

        $str = str_replace("[em_$i]","<img src='/Public/Face/$i.gif'/>",$str);
    }
    return $str;
}