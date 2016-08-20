window.onload=function(){

//声明全局变量检测input值 是否输入正确
		var OK = false;//声明全局变量用来检测默认行为的提交
		var CPHONE = false;//手机号
		var CPWD = false;//密码
		var CREPWD = false;//确认密码
		var CDQPWD = false;//验证码
		var CUSER = false;//用户名
		var CSEX = false;//性别
		var CNOTE = false;//短信验证码
		var DX = null;//接受短信验证ajax返回据
		$('#update-mobile-step2').hide();//验证信息初始为隐藏
		$('#update-mobile-step3').hide();//验证成功显示修改页
		$('#yfs').hide();//点击发送短信是的头部提醒
		$('#dqmm').show();//当前密码
		$('#xgmm').hide();//修改密码
		$('#xmmxianshi').hide();//新密码提示初始隐藏
		$('#xgxs1').hide();
		$('#xgxs2').hide();
		$('#bc').hide();$('#xg').show();
		$('.my-oppo-content-edit').hide();
	
	//用户个人资料修改
	$('#xg').click(function() {
		$('#xg').hide();
		$('#bc').show();
		$('#xgxs1').show();
		$('#xgxs2').show();
		$('.my-oppo-content-edit').show();
		$('.my-oppo-content-text').hide();
	});

	//用户个人资料保存
	$('#bc').click(function() {
		if(CSEX == true){
			alert('修改成功');
			$('#xg').show();
			$('#bc').hide();
			$('#xgxs1').hide();
			$('#xgxs2').hide();
			$('.my-oppo-content-edit').hide();
			$('.my-oppo-content-text').show();
		}else{
			alert('修改失败,未做任何修改');
		}
	});

	//用户名修改操作
	$('#user_profile_form').blur(function(event) {
		//获取当前用户修改的用户名
		var username = $(this).val();
		$.ajax({
				url:'editUsername',
				data:{username:username},
				type:'post',
				async:false,//设置同步
				success:function(data){
					//检测用户输入的短信验证码
					if(data == 2){
						var str = '很抱歉,用户名只能修改一次!';
						$('#onexx').html(str).css('fontSize','18px');
						CUSER = false;
					}else if(data == 1){
						alert('用户名修改失败!');
						CUSER = false;
					}else{
						alert('用户名修改成功!');
						CUSER = true;
					}
				}
		})
	});

	//用户的性别修改
	$('#select').change(function() {
		var sex = $(this).val();
		// alert(sex);//男 1 女 0 选择 2
			$.ajax({
			url: 'checkSEX',
			type: 'post',
			data: {sex:sex},
			async:true,
			success:function(data){
				if(data == 1){
						CSEX = false;
					}else{
						CSEX = true;
					}
				}
			})
		
			if(sex == 1){
				$('#sex').html('男生');
			}else if(sex ==0){
				$('#sex').html('女生');
			}else{
				$('#sex').html('请选择');
			}
	});

	//手机号点击事件
	$('.button').click(function(){
			var phone = $('input[name=phone]').val();
			
			//获取用户名的值
			if(phone.length == 0 ){
				// alert(22);
			// $('#f').css({background:'red',border:'solid 5px #333'});
				//修改提示信息 
				$(this).siblings('.mm').html('请输入手机号').css({color:'red',fontSize:'16px'});
				CPHONE = false;
			}else{
				//检测用户名的格式是否ok
				var reg = /^1\d{10}$/;//
				//检测   exec
				var res = reg.test(phone);
				//用户名的格式i错误
				if(!res){
					$(this).siblings('.mm').html('格式错误').css('color','red');
					CPHONE = false;
					return false;
				}else{
					$(this).siblings('.mm').html("输入正确 √").css('color','green');
					 $('#new-mobile').html(phone);
					CPHONE = true;
				}
			}
			if(CPHONE != true){
				$('#update-mobile-step1').show();
				$('#update-mobile-step2').hide();
			}else{
				$('#update-mobile-step1').hide();
				$('#update-mobile-step2').show();
			}
	})

	//修改密码
	$('#update_password').click(function(){
		//点击时将当前密码隐藏
		$('#dqmm').hide();
		$('#xgmm').show();
	});
	
	//保存密码
	$('#save_password').click(function(){
		//绑定在脚本触发的丧失焦点事件;
		$('input').trigger('blur');
		if(CREPWD && CPWD &&CDQPWD){
			//获取当前用户输入的密码
			var pwd = $('input[name="password"]').val();
			$.ajax({
					url:'updatePWD',
					data:{pwd:pwd},
					type:'post',
					async:false,//设置同步
					success:function(data){
						//检测用户输入的短信验证码
						if(data == 0){
							alert('密码修改成功!');
							$('#dqmm').show();
							$('#xgmm').hide();
						}
					}
				})
			
		}else{
			return false;
		}
	});

	//判断当前密码 获取当前密码的值
	$('input[name="old_password"]').blur(function(){
			//获取当前密码的值
			var old = $(this).val();
			
			//发送AJAX到数据库查询当前密码是否输入正确
			$.ajax({
				url:'checkPWD',
				data:{old:old},
				type:'post',
				async:false,
				success:function(data){
					if(data==1){
						var str = "当前密码错误";
						$('#xianshi').html(str).css('color','red');
						CDQPWD = false;
					}else{
						$('#xianshi').html('');
						CDQPWD = true;
					}
				}
			});
		});
	
	//判断新密码
	$('input[name="password"]').blur(function(){
		//获取当前密码值
		var pwd = $(this).val();
		if(pwd.length == 0 ){
				//修改提示信息
				$('#xmmxianshi').show().css('color','red');
				CPWD = false;
			}else{
				//匹配正则
				var reg = /^\S{6,16}$/;
				//反向判断
				if(!reg.test(pwd)){
					$('#xmmxianshi').show().css('color','red');
					 CPWD = false;
				}else{
					$('#xmmxianshi').hide();
					$('#xianshi').html("");
					 CPWD = true;
				}
		}
	});

	//判断确认新密码
	$('input[name="r_password"]').blur(function(){
		//获取当前确认密码的值
		var pwd = $('input[name=password]').val();

		//获取当前确认密码的值
		var repwd = $(this).val();
		if(repwd.length == 0 ){
				//修改提示信息 
				$('#xianshi').html('请填写确认密码').css('color','red');
				CREPWD = false;
			}else{
				if(pwd != repwd ){
					//修改提示信息
					$('#xianshi').html('两次密码不一致').css('color','red');
					CREPWD = false;
				}else{
					$('#xianshi').html("");
					CREPWD = true;
				}
		}
	});

	//点击短信验证
	$('#but').click(function(){
			$('#yfs').css('color','red').show();
			$('#moren').hide();
			
			//获取用户输入的手机号
			var phone = $('input[name=phone]').val();
			
			//获取用户输入的短信验证码
			var pvalue = $('input[name=code]').val();
			
			//当获取正确的用户输入的手机号时 向用户发送验证信息
			$.ajax({
					url:'testMessage',
					data:{phone:phone},
					type:'post',
					async:false,//设置同步
					success:function(data){
						//检测用户输入的短信验证码
						DX = data;
						
					}
				})
			
	});

	//点击短信验证
	$('#qr').click(function(){
		//获取用户输入的手机号
		var phone = $('input[name=phone]').val();
		var pv = $('input[name=code]').val();
		if(pv.length == 0){
			alert('短信码不能为空');
			CNOTE = false;
		}else if(pv != DX){
			alert("短信码错误");
		}else{
			$('#update-mobile-step1').hide();
			$('#update-mobile-step2').hide();
			$('#update-mobile-step3').show();
			$('#sjhm').next().html(phone+'<a class="margin-left-30">修改</a>');
		}
	});
	
	

	
};