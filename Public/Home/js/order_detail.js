$(function(){
	$('.fukuan').click(function(){
		var orderNum= $(this).attr('ordernum');
		var qian= $(this).attr('qian');
		
		$.post('../../../../../Order/fukuan',{orderNum:orderNum,qian:qian},function(date){
			if(date == 0){
				alert('支付成功');
				location.reload(true);
				return false;
			}else{
				alert('支付失败');
				return false;
			}
		});

		
		
	})
})