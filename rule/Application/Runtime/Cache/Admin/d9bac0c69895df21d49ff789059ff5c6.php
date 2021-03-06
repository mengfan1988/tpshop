<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title>后台管理系统</title>
<link rel="stylesheet" href="/rule/Public/Admin/css/css.css">
<script src="/rule/Public/Admin/js/jquery-1.9.1.js"></script>
<script src="/rule/Public/Common/Layer/layer.js"></script>
<script>
//删除用户
function del(id){
	$("#del"+id+" td").css('background','#CBDFF2');
	parent.layer.confirm('真的要删除吗？', {
		btn: ['确认','取消'], //按钮
		shade: 0.5 //显示遮罩
	}, function(){
		$.post("<?php echo U('User/user_sms_del');?>", { "id": id},function(data){
			if(data == 1){
				parent.layer.msg('删除成功', { icon: 1, time: 1000 }, function(){
						$("#del"+id).remove();
					});
			}else{
				parent.layer.msg('删除失败', {icon: 2, time: 2000 }); 
			}
		}, "json");
	},function(){
		$("#del"+id+" td").css('border-top','0');
		$("#del"+id+" td").css('border-bottom','1px solid #EFEFEF');
	});
}
</script>
</head>
<body>

<div class="nav">
	<div class="nav_title">
    	<h4><img class="nav_img" src="/rule/Public/Admin/img/tab.gif" /><span class="nav_a">短信管理</span></h4>
    </div>
</div>

<form action="/rule/index.php/Admin/User/user_sms_list/menu_title/%E5%AE%A2%E6%88%B7%E7%AE%A1%E7%90%86%20-%20%E7%9F%AD%E4%BF%A1%E9%AA%8C%E8%AF%81%E7%A0%81" method="post">
<div class="search" style="height:50px; line-height:50px; padding-left:30px; margin-top:3px;">
手机号：<input type="text" name="mobile" value="<?php echo ($where["field_val"]); ?>" maxlength="16" class="input" style="height:28px;" />&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
    <button type="submit" name="submit" class="button">查 询</button>
</div>
</form>

<div class="list">
	  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
      <thead>
	    <tr>
	      <td width="13%"><div align="center">ID</div></td>
	      <td width="16%"><div align="center">手机号</div></td>
	      <td width="17%"><div align="center">验证码</div></td>
	      <td width="21%"><div align="center">发送结果</div></td>
	      <td width="15%"><div align="center">提交时间</div></td>
	      <td width="18%"><div align="center">操作</div></td>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr id="del<?php echo ($vo["id"]); ?>">
	      <td height="50"><div align="center"><?php echo ($vo["id"]); ?></div></td>
	      <td><div align="center"><?php echo ($vo["mobile"]); ?></div></td>
	      <td><div align="center"><?php echo ($vo["sms_code"]); ?></div></td>
	      <td><div align="center"><?php echo ($vo["send_result"]); ?></div></td>
	      <td><div align="center"><?php echo ($vo["create_time"]); ?></div></td>
	      <td><div align="center">
          <a class="a_button" href="javascript:;" onclick="del(<?php echo ($vo[id]); ?>)">删除</a>
          </div></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
  </table>
</div>

<!-- 分页 -->
<div class="page">
<?php echo ($page); ?>
</div>


</body>
</html>