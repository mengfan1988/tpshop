
$(function(){
	var shuxingzhi=document.getElementsByClassName('shuxingzhi');
	
	var move = document.getElementById('move');
	
	window.onclick = function(){
		//隐藏元素
		move.style.display = "none";
	}
	$('.shuxingbiao span').mouseover(function() {
		this.oncontextmenu=function(e){
			//alert($(this).attr('keys'));
			var x = e.pageX;
			var y = e.pageY;//client客户端

		//修改div的位置page
			move.style.left = x+'px'
				
			move.style.top = y+'px';
            // console.log(x+'---'+move.style.left);
            // console.log(y+'---'+move.style.top);
			move.style.display = "block";
			var keys=$(this).attr('keys');
			var guanxi=$(this).attr('guanxi')
			$('.caozuo').attr('shuzi',keys);
			$('.caozuo').attr('guanxi',guanxi);
			

			
			return false;
		}
	});
	function show(status,info){
            $('.alert-'+status).html(info).show();
            $('.alert-'+status).fadeOut(3000);
        }
    $('.editstyle').click(function(){
    		var id=$(this).attr('shuzi');
    		var span=$('span[keys='+id+']');
    		var v = span.html();

            //alert(v);
            //创建input
            var input = $('<input type="text" />');
            //设定值
            input.val(v);
            //设置td的文本为input
            span.empty();
            span.append(input);
            //选中
            input.select();
            
            //绑定丧失焦点事件
            
            input.blur(function(){
                //获取新的值
               var newV = $(this).val();
                
                //发送ajax
                $.post("./ajaxUpdate",{name:newV,id:id},function(data){
                    //做判断
                    if(data == 1){
                        span.html(newV);
                        show('success','更新成功');
                    }else{
                        span.html(v);
                        show('danger','更新失败');
                    }
                });
            })
           
    });
				
     $('.delstyle').click(function(){
     	var id=$(this).attr('shuzi');
     	var guanxi=$(this).attr('guanxi');
     	console.log(guanxi);
     	var span=$('span[keys='+id+']');
    	$.post("./ajaxDel",{id:id,guanxi:guanxi},function(data){
                    //做判断
                    if(data == 1){
                    	if(guanxi=='0'){
                    		var tr=span.parents('tr');
                    		
                    		//span.remove()
                    		tr.remove();
                    	}else{	
                       		span.remove();
                    	}
                        show('success','删除成功');
                    }else{
                        
                        show('danger','删除失败');
                    }
                });

     });
     $('.addstyle').click(function(){
     	var guanxi=$(this).attr('guanxi');
            if(guanxi=='0'){
     		 location.href="./add";
            }else{
                var id=$(this).attr('shuzi');
                var span=$('span[keys='+id+']');
                var td=$('span[keys='+id+']').parent();
                
           
                var input = $('<input type="text" /><span>');
            
            
                td.append(input);
                
                input.select();
            
                //绑定丧失焦点事件
            
                 input.blur(function(){
                //获取新的值
                var newV = $(this).val();
                
                    //发送ajax
                $.post("./ajaxAdd",{name:newV,oid:id},function(data){
                    //做判断
                    if(data){
                            input.remove();
                        var spans=span.clone(true);
                            spans.attr('guanxi',guanxi);
                            spans.attr('keys',data);
                            spans.html(newV);
                            td.append(spans)

                        show('success','添加成功');
                    }else{
                        input.remove();
                        show('danger','添加失败');
                    }
                });
            })

            }
     });     
			
})