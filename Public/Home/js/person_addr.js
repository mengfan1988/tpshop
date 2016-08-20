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
		// $('.links').hide();
		// $('#update-mobile-step3').hide();//验证成功显示修改页
		
	
	//用户个人地址编辑
	$('.bianji').click(function() {
		//点击是将修改页显示
		$('.address-form').css('display','block');
		// $('.field ').css('display','none');
		var s =  $('.bianji').attr('data-shou');
		var t  =	$('.bianji').attr('data-tel');
		var a =	$('.bianji').attr('data-addr');
		var id =	$('.bianji').attr('data-id');
		//获取*收货人姓名
		$('input[name=shou]').val(s);
		//获取*手机号码
		$('input[name=tel]').val(t);
		//获取*收货地址
		$('input[name=address]').val(a);
		$('input[name=id]').val(id);

	});

	//个人地址编辑保存
	$('.address-update').click(function(){
		
		//获取*收货人姓名
		var shou = $('input[name=shou]').val();
		//获取*手机号码
		var tel = $('input[name=tel]').val();
		//获取*收货地址
		var address = $('input[name=address]').val();
		var id = $('input[name=id]').val();
		//执行修改
		$.ajax({
			url: 'editAddr',
			type: 'post',
			data: {shou:shou,tel:tel,address:address,id:id},
			async:true,
			success:function(data){
				if(data == 0){
					alert('修改成功');
					$('.address-form').css('display','none');
					$('.field ').css('display','block');
					location.href = location.href;

				}else{
					alert('修改失败');
				}
			}
		})
		
		
	});

	//个人地址删除
	$('.remove-address').click(function() {
		var id = $(this).attr('data-id');
		$.ajax({
			url: 'DeleteAddr',
			type: 'post',
			data: {id:id},
			async:true,
			success:function(data){
				if(data == 0){
					alert('删除成功');
					location.href = location.href;
					// $('.address-form').css('display','none');
					$('#morenkuang').css('display','block');
				}else{
					alert('删除失败');
				}
			}
		})
	});

	//个人地址编辑取消
	$('.address-cancel').click(function() {
		$('.address-form').css('display','none');
		$('#morenkuang').css('display','block');
	});

	//用户个人地址添加 tjxsy
	$('#address_new').click(function() {
		$('#tjxsy').css('display','block');
		
	});

	//用户个人地址添加 取消
	$('.address-new-cancel').click(function() {
		$('#tjxsy').css('display','none');
	});

	//用户个人地址添加 保存
	$('.address-store').click(function() {
		//获取*收货人姓名
		var shou = $('input[name=receiver]').val();
		//获取*手机号码
		var tel = $('input[name=mobile]').val();
		//获取*收货地址
		var address = $('input[name=address-detail]').val();
		// alert(shou+tel+address);
		//执行修改
		$.ajax({
			url: 'AddAddr',
			type: 'post',
			data: {shou:shou,tel:tel,address:address},
			async:true,
			success:function(data){
				if(data == 0){
					alert('添加成功');
					location.href = location.href;	
					$('#tjxsy').css('display','none');
					// $('#morenkuang').css('display','block');
				}else{
					alert('添加失败');
				}
			}
		})
	});
	
	$('.radio-item').toggle(function(){
		
		
		$(this).find('.radio').addClass('checked_radio');
		
		$(this).siblings().find('.radio').removeClass('checked_radio');
		
		
		// $(this).removeAttr('checked_radio');
	},function(){
		$(this).find('.radio').removeClass('checked_radio');
		
		$(this).siblings().find('.radio').removeClass('checked_radio');

	});

	
	
};