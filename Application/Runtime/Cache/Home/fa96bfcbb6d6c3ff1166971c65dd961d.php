<?php if (!defined('THINK_PATH')) exit();?><html>
	<head charset="utf-8">
		<title><?php echo $_SESSION['web']['name'];?></title>
	
	<style>
		.box{
			width:1180px;
			height:320px;
			margin:0px auto;
		
		}
		.img-box{
			width:500px;
			height:200px;
			background:#eee;
			margin:30px auto;
			padding:20px 20px;
		}
		.img-box p{
			font-size:20px;
			font-weight:600;
			display:block;
			width:500px;
			text-align:center;
			margin-top:30px;
			color:#00925f;
		}
		.img-box span{
			margin-left:120px;
			font-size:12px;
		}
		.img-box .tu{a
			width:100%;
			text-align:center;
			height:50px;
			margin-top:30px;
		}

</style>
</head>
	<body>
		<div class="box">
			<div class="img-box">
				<?php echo ($res); ?>
				<p><?php echo $_SESSION['web']['yuanyin'];?></p>
				<span>为您带来的不便请谅解，维护大约2个小时</span>
				<div class="tu">
					<img src="/Public/Home/Images/4.gif" alt="">
					<img src="/Public/Home/Images/4.gif" alt="">
					<img src="/Public/Home/Images/4.gif" alt="">
					<img src="/Public/Home/Images/4.gif" alt="">
				</div>
			</div>
		</div>

	</body>
</html>