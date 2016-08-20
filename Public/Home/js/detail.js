$(function(){

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
	$('#product-tabs .oppo-tj').click(function(){

		var aa = $(this).attr('data-hash');
		$(this).addClass('y-tab-active').siblings().removeClass('y-tab-active');
		$('#product-detail-'+aa).css('display','block').siblings().css('display','none')
	});
	$('.pingjia').click(function(){
		var id= $(this).attr('phoneid');
		
		$.ajax({
			url:"/index.php/Phone/getuserid",
			type:'post',
			data:{'id':id},
			dataType:'json',
			async:false,
			success:function(data){
				if(data==0){
					
					$('#respond').css('display','block');
					$('#comments').css('display','none');
				}else if(data == 2){
						
					$('#y-modal-7cd2aE1444642953147').addClass('y-modal-active');
					$('.y-modal-overlay').css('display','block');
				}else if(data == 1){
					$('#y-modal-7cd2aE1444642953147').addClass('y-modal-active');
					$('#y-modal-7cd2aE1444642953147').find('.y-modal-message').html('抱歉，您没有登录，暂时无法评价。');
					$('.y-modal-overlay').css('display','block');

				}
			},


		});
		return false;
		});
		
		$('.guanbi').click(function(){
			$('#y-modal-7cd2aE1444642953147').removeClass('y-modal-active');
			$('.y-modal-overlay').css('display','none');
			return false;
		});
		//评价得分
		var score = null;
		var commentCotent = null;
		var uid = $('input[name=uid]').val();
		var uname = $('input[name=uname]').val();
		var pId = $('input[name=pid]').val();
		var fenlei=0;
		$('.comment-star .stars').click(function(){
			 $(this).addClass('aa').siblings('').removeClass('aa');
			 score = $(this).attr('data-value');
			 $('.scoreTishi').html('');
			return false;
		});
		//input 表单验证
		var commentflag = false;
		$('#comment').blur(function() {
			
			 commentCotent = $(this).val();
			
			var commentReg = /^\w{1,200}$/;
			var commentRes = commentReg.test(commentCotent);
			
			if(!commentRes){
				$('.conmentTishi').html('内容格式不对');
				commentflag = false;
			}else{
				$('.conmentTishi').html('')
				commentflag = true;
			}
			
		});
		$('#submit-comment').click(function(){

			if(score == null){
				$('.scoreTishi').html('分数忘记打了');
			}else{
				$('.scoreTishi').html('');
			}
			// //console.log($('input[type=file]'));
				
			$('#comment').trigger('blur');
			
			if(score && commentflag){
				$('#comment-loading').css('display','block').html('提交中.....');
				var querenzhui =$('input[name=querenzhui]').val();
				$.ajax({
					url:'/index.php/Assess/ajaxAdd',
					data:{uid:uid,xing:score,pid:pId,content:commentCotent,fenlei:fenlei,pic:pic,zhui:querenzhui},
					type:'post',
					dataType:'json',
					async:false,
					success:function(data){
						if(data==1){
							$('#comment-loading').css('display','block').html('提交失败:(');
							
						}else{
							alert('提交成功');
							$('#comment-loading').css('display','none')
							$('#respond').css('display','none');
							$('#comments').css('display','block');
							window.location.href="../../../Phone/detail/id/"+pId+"/fenye/3";
						}	
						// 	var d = new Date();
						// 	//获取年份  PROE
						// 	var year = d.getFullYear();

						// 	//获取月份
						// 	var month = d.getMonth()+1;//month  索引是从0开始的
						// 	if(month < 10){//9  90 
						// 		month = '0'+month; //9 
						// 	}
						// 	//获取日期
						// 	var day = d.getDate();

						// //获取小时
						// 	var hours = d.getHours();//hour

						// //获取分钟
						// 	var minutes = d.getMinutes();//minute  

						// //获取秒数
						// 	var seconds = d.getSeconds();//second

						
						//  //拼接时间字符串
						// var t = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;

						// 	$('#comment-loading').fadeOut('80000',function(){
						// 	//alert('提交成功');
						// 	if(querenzhui ==0){
						// 		var pengjia = $('<li class="comment-leaf-one"><article class="y-comment-body"><div class="y-comment-meta clearfix"><div class="y-comment-author"><div class="y-comment-avator"><img src="avatar.php" alt=""></div><div class="comment-author"><span>'+uname+'</span><em>'+t+'</em></div></div><div class="y-comment-metadata"><span class="y-comment-stars"><span class="stars star-1"></span></span></div></div><div class="y-comment-content">'+commentCotent+'</div></article></li>')
						// 		// pengjia.children('.comment-author').html('<span>'+uid+'</span><em></em>');
						// 		// pengjia.children('.y-comment-content').html(commentCotent);
						// 		// console.log(pengjia);
								
						// 		$('#respond').css('display','none');
						// 		$('#comments').css('display','block');
						// 		$('.y-comment-list').prepend(pengjia);
						// 	}else {
						// 		var zhui =$('<article class="y-comment-body comment-append" ><div class="y-comment-meta"><div class="comment-label">追加评论:&nbsp;&nbsp;<span></span></div><div class="comment-date">'+t+'</div></div><div class="y-comment-content">'+commentCotent+'</div></article>');
						// 		$('#respond').css('display','none');
						// 		$('#comments').css('display','block');
						// 		$('.comment-leaf[assessId='+querenzhui+']').append(zhui);

						// 	}

							return false;	
						
					},

					});
				return false;
			}
			return false;
		})
	
		
	//取消评价
	$('.quxiaopinglun').click(function(){
		$('#respond').css('display','none');
		$('#comments').css('display','block');
		return false;
	})
		
					
	$('.hot').click(function(){
		$('.ss').addClass('y-tab-active');
		$('.aa').removeClass('y-tab-active');

		$('.related-tab1').show();
		$('.related-tab2').hide();
		return false;
	})
			
	$('.kan').click(function(){
		$('.aa').addClass('y-tab-active');
		$('.ss').removeClass('y-tab-active');
		$('.related-tab2').show();
		$('.related-tab1').hide();
		return false;

	})


	
		
		
})

