$(function(){
	//编辑地址按钮
	$('.addressEdit').click(function(){
		$('.address-form').css('display','block');
		var shou=$(this).attr('shou');
		var tel=$(this).attr('tel');
		var address=$(this).attr('address');
		var addressId=$(this).attr('addressId');
		
		$('input[name=id]').val(addressId);
		$('input[name=shou]').val(shou);
		$('input[name=tel]').val(tel);
		$('input[name=dizhi]').val(address);

		return false;
	});
	//地址添加 修改的表单懂得保存按钮
	$('.quxiao').click(function(){
		$('input[name=id]').val('');
		$('input[name=shou]').val('');
		$('input[name=tel]').val('');
		$('input[name=dizhi]').val('');

		$('.address-form').css('display','none');
	});
	//地址添加 修改的表单懂得保存按钮
	$('.addressAdd').click(function(){
		var shou=$('input[name=shou]').val();
		var tel=$('input[name=tel]').val();
		var address=$('input[name=dizhi]').val();
		var addressId=$('input[name=id]').val();

		$.post('Address',{shou:shou,tel:tel,address:address,id:addressId},function(date){
			if(date == 0){
				alert('成功');
				$('.address-form').css('display','none');
				location.reload(true);
			}else{
				alert('失败');
			}
		})

		return false;

	});
	//删除地址
	$('.removeaddress').click(function(){
		var addressId=$(this).attr('addressId');
		$.post('addressDel',{id:addressId},function(date){
			if(date == 0){
				alert('删除成功');
				
				location.reload(true);
			}else{
				alert('删除失败');
			}
		})
	});
	$('#address_new').click(function(){
		$('.address-form').css('display','block');
		$('input[name=id]').val('');
		$('input[name=shou]').val('');
		$('input[name=tel]').val('');
		$('input[name=dizhi]').val('');

		return false;
	});
	$('.address_list_0').toggle(function(){
		$(this).find('.radio').addClass('checked_radio');
		$(this).find('input[name=xuandizhi]').attr('checked','true');

		$(this).siblings().find('.radio').removeClass('checked_radio');
		$(this).siblings().find('input[name=address]').removeAttr('checked');

		},
		function(){
			$(this).find('.radio').removeClass('checked_radio');
			$(this).find('input[name=xuandizhi]').removeAttr('checked');
			$(this).siblings().find('input[name=xuandizhi]').removeAttr('checked');

			$(this).siblings().find('.radio').removeClass('checked_radio');

		}

	);
	$('.cart-button').click(function(){
		if(!$('.radio').hasClass('checked_radio')){
			$('.tishi').html('请选择地址').css('color','red');
			return false;
		}else{
			$('.tishi').html('');
			return true;
		}
																																		
	});

})
	
