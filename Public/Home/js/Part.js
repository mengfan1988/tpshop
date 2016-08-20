$(function(){

//递减数量
$('.jian').click(function(){
	var valNew = null;
	var val = parseInt($('#amount-textbox').val());

		if( val >1 ){
			valNew = val-1;
		}else{
			valNew = 1;
			$(this).addClass('disabled');
		}
		$('#amount-textbox').val(valNew);
		return false;
});

//增加数量
$('.jia').click(function(){
	$('.jian').removeClass('disabled');
		var valNew = null;
			var val = parseInt($('#amount-textbox').val());
			valNew = val+1;
		$('#amount-textbox').val(valNew);
			return false;
});
$('#button-buy').click(function(){
	alert('已加入购物车');
});

// $('#button-buy').click(function(){
// 	alert('已加入购物车');
// });

$('.xiaolunbo').click(function(){

		var xu=$(this).attr('xu');
		$('.xiaolunbo').removeClass('ps-item-active');
		$(this).addClass('ps-item-active');
		
		//alert(xu);
		$('.lunbopicxu :eq('+xu+')').css("transform","translateX(0px)");
		$('.lunbopicxu :gt('+xu+')').css("transform","translateX(588px)");
		$('.lunbopicxu :lt('+xu+')').css("transform","translateX(-588px)");
		return false;
	});


})