$(function(){
		

		$('.phoneColor').click(function(){
			//alert($('input[name=color]').val());
			 var colorId = $(this).attr('colorId');
			 $('input[name=color]').val(colorId);
			 //alert($('input[name=color]').val());
			 $(this).addClass('selected');
			 $(this).parent().siblings().children('a').removeClass('selected');
			return false;
		});
		$('.mealId').toggle(
			function(){
			
				var mealId = $(this).attr('mealId');
				var mealPic = $(this).attr('mealPic');
				var mealTitle = $(this).attr('mealTitle');
				var mealPartId = $(this).attr('mealPartId');
				var mealPrice = $(this).attr('mealPrice');
				var mealnum = $(this).attr('mealnum');
				
			 	$('input[name=mealId]').val(mealId);
			 	$('input[name=mealPic]').val(mealPic);
			 	$('input[name=mealTitle]').val(mealTitle);
			 	$('input[name=mealPartId]').val(mealPartId);
			 	$('input[name=mealPrice]').val(mealPrice);
			 	$('input[name=mealnum]').val(mealnum);
			 	
			 	$(this).children('i').css('display','block');
			 	$(this).siblings().children('i').css('display','none');
			 	//alert($('input[name=mealId]').val())
			return false;
			},
			function(){
				
			 	$('input[name=mealId]').val(0);
			 	$('input[name=mealPic]').val(0);
			 	$('input[name=mealTitle]').val(0);
			 	$('input[name=mealPartId]').val(0);
			 	$('input[name=mealPrice]').val(0);

			 	$('input[name=mealnum]').val(0);

			 	$(this).children('i').css('display','none');
			 	$(this).siblings().children('i').css('display','none');
			 	//alert($('input[name=mealId]').val())
			 	
			return false;	
			}

		);
		$('.fuwu').toggle(
			function(){
			
				var fuwuId = $(this).attr('fuwuId');
			 	$('input[name=fuwuId]').val(fuwuId);
			 	$(this).children('i').css('display','block');
			 	$(this).siblings().children('i').css('display','none');
			 	//alert($('input[name=mealId]').val())
			return false;
			},
			function(){
				
			 	$('input[name=fuwuId]').val(0);
			 	$(this).children('i').css('display','none');
			 	$(this).siblings().children('i').css('display','none');
			 	//alert($('input[name=mealId]').val())
			 	
			return false;	
			}

		);
		$('.jian').click(function() {

			var valNew = null;
			var val = parseInt($('#amount-textbox').val());
			if( val >1 ){
				valNew = val-1;
				
			}else{
				valNew = 1;
			}
			//alert(valNew);
			$('#amount-textbox').val(valNew);
			return false;
		});
		$('.jia').click(function() {

			var valNew = null;
			var val = parseInt($('#amount-textbox').val());
			if( val <5 ){
				valNew = val+1;
				
			}else{
				valNew = val;
			}
			//alert(valNew);
			$('#amount-textbox').val(valNew);
			return false;
		});
		$('#button-buy').click(function(){
			if($('input[name=color]').val()==0){
				alert('请选择颜色');
				return false;
			}

			return true;
		})
		

})