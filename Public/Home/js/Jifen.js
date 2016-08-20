$(function(){

//递减数量
$('.jian').click(function() {
			$('.jia').removeClass('disable');
			var valNew = null;
			var val = parseInt($('#goods_cnt').val());
			//兑换值
			var price = $('#goods_points').html();
			//(需花费)
			var zongjia = $('#result-points').html();
			if( val >1 ){
				valNew = val-1;
				//(需花费)
				$('#result-points').html(zongjia-price);
			}else{
				valNew = 1;
				$(this).addClass('disable');
			}
			$('#goods_cnt').val(valNew);
			$('#result-num').html(valNew);
			return false;
		});
//增加数量
$('.jia').click(function() {
	$('.jian').removeClass('disable');

	var valNew = null;
	var val = parseInt($('#goods_cnt').val());
	if( val <5 ){
		valNew = val+1;
		//兑换值
		var price = $('#goods_points').html();
		//(需花费)
		$('#result-points').html(price*valNew);
	}else{
		valNew = val;
		alert('已达到该商品最高兑换量');
		$(this).addClass('disable');
	}
	$('#goods_cnt').val(valNew);
	$('#result-num').html(valNew);
	return false;
});

//点击兑换
$('#duihuan').click(function(){
	//获取实际兑换分
	var t = $('#result-points').html();
	//获取实际数量
	var total = parseInt($('#goods_cnt').val());
	var result = confirm('您确定要花费'+t+'积分兑换'+total+'件该积分品么？');
    if(result){//true
        
	        //如果确定则执行
	        $.ajax({
	        	url: '../../editprice',
	        	type: 'post',
	        	dataType: 'json',
				async:true,
	        	data: {t:t},
	        	success:function(data){
	        		if(data == 2){
	        			alert('对不起您的积分不够兑换次积分品');
	        		}else if(data == 0){
		        			alert('兑换成功,请坐等我们发货');
	        		}else{
		        			alert('对不起系统异常');
	        		}
	        	}
	        })
        
    }
    return false;
});



})