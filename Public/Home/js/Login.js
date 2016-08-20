window.onload=function(){
//声明全局变量检测input的值 是否输入正确
		var CUSER = false;
		var CPASS = false;
		var OK = false;//声明全局变量用来检测默认行为的提交
	
		//获取焦点
		$('input').focus(function(){
		})

		//用户名丧失焦点事件
		$('input[name=username]').blur(function(){
			//获取用户名的值
			var username = $(this).val();
			var inp = $(this);
			//发送ajax检测用户是否存在
				$.ajax({
				url:'checkUser',
				data:{username:username},
				type:'post',
				async:false,//设置同步
				success:function(data){
					//如果用户名不存在
					if(data==1){
						var str = "用户名不存在";
						inp.next().html(str).css('color','red');
						CUSER = false;
					}else if(data == 2){
						var str = "对不起,您已被禁止登录";
						inp.next().html(str).css('color','red');
						CUSER = false;
					}else{
						inp.next().html("输入正确 √").css('color','green');
						CUSER = true;
					}
				}
			})
		})

		//密码丧失焦点事件
		$('input[name=password]').blur(function(){
			//获取密码的值
			var password = $(this).val();
			//判断如果密码为空
			if(password.length == 0 ){
				//修改提示信息
				$(this).next().html('密码不能为空').css('color','red');
				CPASS = false;
			}else{
				CPASS = true;
			}
		})

		//提交事件
		$('form').submit(function(){
			//脚本中触发丧失焦点事件
			$('input').trigger('blur');
		
			if(CUSER && CPASS){
				
				//获取当前用户值
				var username = $('input[name=username]').val();
				//获取当前密码值
				var password = $('input[name=password]').val();
				
				
				//发送ajax检测用户名和密码是否输入正确
				$.ajax({
					url:'check',
					data:{username:username,password:password},
					type:'post',
					async:false,//设置同步
					success:function(data){
						//如果用户名密码验证成功 让其登录
						if(data==0){
							CUSER = false;
							CPASS = false;
							OK = true;
						}else{
							CPASS = false;
							CUSER = false;
							OK = false;
							$('input[name=password]').next().html('密码错误').css('color','red');
						}
					}
				})
			
			}
				//阻止默认行为
				if(!OK){
					return false;
				}else{
					OK = false;
				}			
			
		})
	
}