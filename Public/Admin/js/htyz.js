window.onload=function(){

//声明全局变量检测input值 是否输入正确
		var CUSER = false;
		var CPWD = false;
		var CAGE = false;
		var CREALNAME = false;
		var CEMAIL = false;
	//在全部输入正确时 才允许提交
	$('form').submit(function(){
		//绑定在脚本触发的丧失焦点事件
		$('input').trigger('blur');
		// console.log(CUSER);
		// console.log(CPWD);
		// console.log(CAGE);
		// console.log(CREALNAME);
		// console.log(CEMAIL);
		
		//判断全局变量值全相等
		if(CUSER && CPWD && CAGE && CREALNAME && CEMAIL ){
				return true;
			}
		return false;
	});

	//绑定获取焦点
	$('input').focus(function(){
		//获取属性
		var attr = $(this).attr('remind');
		//设置文本
		$(this).next().html(attr).css('color','green');
		$(this).addClass('cur');
	});

	//检测用户
	$('input[name=username]').blur(function(){
		var attr = $(this).attr('remind','');
		//设置文本
		$(this).next().html(attr).css('border','1px solid #ccc');
		$(this).removeClass('cur');
		 CUSER = true;
	});

	//检测密码
	$('input[name=password]').blur(function(){
		
		//获取当前密码值
		var pwd = $(this).val();
		//匹配正则
		var reg = /^\S{5,10}$/;
		//反向判断
		if(!reg.test(pwd)){
			checkError('password');
			 CPWD = false;
		}else{
			checkOK('password');
			 CPWD = true;
		}
	});

	
	//年龄
	$('input[name=age]').blur(function(){
		//获取当前手机值
		var age = $(this).val();
		//匹配正则
		var reg = /^\d{2,3}$/;
		//反向判断
		if(!reg.test(age)){
			checkError('age');
			CAGE = false;
		}else{
			checkOK('age');
			CAGE = true;
		}
	});

	//真实姓名
	$('input[name=realname]').blur(function(){
		//获取当前手机值
		var realname = $(this).val();
		//匹配正则
		var reg = /^\S{2,6}$/;
		//反向判断
		if(!reg.test(realname)){
			checkError('realname');
			CREALNAME = false;
		}else{
			checkOK('realname');
			CREALNAME = true;
		}
	});
	//检测邮箱
	$('input[name=email]').blur(function(){
		var attr = $(this).attr('remind','');
		//设置文本
		$(this).next().html(attr).css('border','1px solid #ccc');
		$(this).removeClass('cur');
		CEMAIL = true;
	});

	//输入正确函数封装
	function checkOK(name){
		//获取input
		var ele = $('input[name='+name+']');
		//设置样式
		//移出错误样式
		ele.removeClass('error');
		//设置成功文本
		ele.next().html('√');
		ele.removeClass('cur');
	}
	//输入失败函数封装
	function checkError(name){
		var ele = $('input[name='+name+']');
		//设置错误文本
		ele.next().html('亲,输错了哦').css('color','red');
		//添加错误样式
		ele.addClass('error');
	}
};