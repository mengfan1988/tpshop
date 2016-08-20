$(function(){
	$('.fukuan').click(function(){
		var orderNum= $(this).attr('ordernum');
		var qian= $(this).attr('qian');
		
		$.post('../Order/fukuan',{orderNum:orderNum,qian:qian},function(date){
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

	$('.quxiao').click(function(){
		var orderId= $(this).attr('orderid');
		$.post('quxiao',{id:orderId},function(date){
			if(date == 0){
				alert('订单取消成功');
				location.reload(true);
				return false;
			}else{
				alert('订单取消失败');
				return false;
			}
		});

	});
})