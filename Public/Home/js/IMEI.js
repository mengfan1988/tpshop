window.onload=function(){

//声明全局变量检测input值 是否输入正确
		var OK = false;//声明全局变量用来检测默认行为的提交
		var CCODE = false;//验证码
		var IMEI = false;//手机串号
		// $('#sj').hide();//验证信息初始为隐藏

	//手机号丧失焦点事件
	$('input[name=imei]').blur(function(){
			//获取用户名的值
			var imei = $(this).val();
			if(imei.length == 0 ){
				//修改提示信息
				$(this).next().html('请输入手机IMEI号码').css('color','red');
				IMEI = false;
			}else{
				//检测用户名的格式是否ok
				var reg = /^1\d{14}$/;//
				//检测   exec
				var res = reg.test(imei);
				if(!res){
					$(this).next().html('格式错误').css('color','red');
					IMEI = false;
					return false;
				}else{
					var inp = $(this);
						$.ajax({
							url:'check',
							data:{imei:imei},
							type:'post',
							async:false,//设置同步
							success:function(data){
								//如果验证码错误
								if(data==1){
									var str = "您的手机IMEI码错误";
									inp.next().html(str).css('color','red');
									IMEI = false;
								}else{
									inp.next().html("输入正确 √").css('color','green');
									IMEI = true;
								}
							}
						})
				}
			}
		
	})



	// 检测验证码
	$('input[name=vcode]').blur(function(){
		//获取当前验证码
		var code = $(this).val();
		//判断如果验证码为空
		if(code.length == 0){
			$(this).next().html('验证码不能为空').css('color','red');
			CCODE = false;
		}else{
			//如果不为空 发送ajax效验验证码
			var inp = $(this);
			$.ajax({
				url:'checkcode',
				data:{code:code},
				type:'post',
				async:false,//设置同步
				success:function(data){
					//如果验证码错误
					if(data==1){
						var str = "验证码错误";
						inp.next().html(str).css('color','red');
						CCODE = false;
					}else{
						inp.next().html("输入正确 √").css('color','green');
						CCODE = true;
					}
				}
			})
		}
	});

	// 在全部输入正确时 才允许提交
	$('form').submit(function(){
		
		console.log(IMEI);
		console.log(CCODE);

		//绑定在脚本触发的丧失焦点事件;
		$('input').trigger('blur');
		// console.log(CNOTE);
		//判断全局变量值全相等
		if(IMEI && CCODE){
				OK = true;
			}
			//阻止默认行为
			if(!OK){
				return false;
			}else{
				OK = true;
			}	
	});
};