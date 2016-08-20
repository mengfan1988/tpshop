$(function(){
	
	$('.jian').click(function() {
			var carkey = $(this).attr('carkey');
			var v= null;
			var val = $(this).next().val();
			if( val >1 ){
				v = val-1;
				
			}else{
				v = 1;
			}
			//alert(valNew);
			$(this).next().val(v);
			//更改套餐数量
			var meal=$(this).parents('.cart-product-l').siblings('.cart-meal');
			mealspan = meal.find('.tshu');
			mealspan.html(mealspan.attr('mealnum')*v);

			//更改赠品数量
			var zengpin=$(this).parents('.cart-product-l').siblings('.cart-zengpin');
			zengpin.each(function(){
				var zengpinspan = $(this).find('.zshu');
				zengpinspan.html(zengpinspan.attr('zshu')*v);
			});

			//更改服务数量
			var fuwu=$(this).parents('.cart-product-l').siblings('.cart-service');
			fuwuspan = fuwu.find('.fshu');
			fuwuspan.html(v);
			count()
			$.ajax({
				url:"edit",
				type:'post',
				dataType:'json',
				async:false,
				data:{carkey:carkey,num:v},
				success:function(date){
					console.log(date);
				}

			});

			
			return false;
		});

		$('.jia').click(function() {
			var carkey = $(this).attr('carkey');
			var v=  $(this).prev().val();
			$(this).prev().val(++v);
			//更改套餐数量
			var meal=$(this).parents('.cart-product-l').siblings('.cart-meal');
			mealspan = meal.find('.tshu');
			mealspan.html(mealspan.attr('mealnum')*v);

			//更改赠品数量
			var zengpin=$(this).parents('.cart-product-l').siblings('.cart-zengpin');
			zengpin.each(function(){
				var zengpinspan = $(this).find('.zshu');
				zengpinspan.html(zengpinspan.attr('zshu')*v);
			});

			//更改服务数量
			var fuwu=$(this).parents('.cart-product-l').siblings('.cart-service');
			fuwuspan = fuwu.find('.fshu');
			fuwuspan.html(v);
			count()
			$.ajax({
				url:"edit",
				type:'post',
				dataType:'json',
				async:false,
				data:{carkey:carkey,num:v},
				success:function(date){
					console.log(date);
				}

			});

			
			return false;
		});
		

		function count(){
			var talCount = 0;
			var talQian = 0;

			var zhuCount = 0;
			var zhusQian = 0;

			var zengpinCount = 0;
			
			var mealCount = 0;	
			var mealsQian = 0;

			var fuwuCount = 0;	
			var fuwusQian = 0;	
			$('.jiaxianshu').each(function(){
				var zhuShu = parseInt($(this).val());
				var zhuPrice = parseInt($(this).attr('zhuPrice'));
				var zhuQian = zhuShu * zhuPrice;

				zhusQian += zhuQian;
				zhuCount += zhuShu;
				
				

			})
			$('.zshu').each(function(){
				zengpinCount += parseInt($(this).html());
				
			})
			$('.tshu').each(function(){
				var mealShu = parseInt($(this).html());
				var mealPrice = parseInt($(this).attr('mealPrice'));
				var mealQian =mealShu*mealPrice;

				mealsQian += mealQian;
				mealCount += mealShu;
			})
			$('.fshu').each(function(){
				var fuwuShu = parseInt($(this).html());
				var fuwuPrice = parseInt($(this).attr('fuwuPrice'));
				var fuquQian = fuwuShu*fuwuPrice;

				fuwusQian += fuquQian;
				fuwuCount += fuwuShu;
			})
			talCount=zhuCount+zengpinCount+mealCount+fuwuCount;
			talQian = zhusQian + mealsQian + fuwusQian;
			$('.talCount').html(talCount);
			$('.cart_number').html(talCount);
			$('.talQian').html('￥'+talQian);
			$.post('count',{talCount:talCount,talQian:talQian});
			
		}
		count();
		//删除
		$('.del').click(function(){
			var carkey = $(this).attr('carkey');
			$(this).parents('.yitiao').remove();
			count();
			$.ajax({
				url:"del",
				type:'post',
				dataType:'json',
				async:false,
				data:{carkey:carkey},
				success:function(date){
					console.log(date);
				}

			});
		});
		$('#shipping_btn').click(function() {
			if($('.talCount').html() == 0){
				alert('购物车内没商品,请添加商品');
				return false;
			}
		});

})