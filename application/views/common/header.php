<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo empty($prefix_title)? '':$prefix_title; ?>湘大文库</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/static/css/flatly/bootstrap.css" media="screen">
		<link rel="stylesheet" href="/static/css/doc.style.css?v=4">
		<link rel="stylesheet" href="/static/css/uploadify.css">
		<!--[if IE 8]>
		<script type="text/javascript">
			window.location="/bs-ie.html";
		</script>
		<![endif]-->
		<!--[if lte IE 7]>
		<script type="text/javascript">
			window.location="/bs-ie.html";
		</script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top"><!---->
			<div class="container">
				<div class="navbar-header">
					<a href="/" class="navbar-brand">湘大文库</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li <?php if(isset($nav) && $nav=="index") echo 'class="active"';?> >
							<a href="/">首页</a>
						</li>
						<li <?php if(isset($nav) && $nav=="list") echo 'class="active"';?> >
							<a href="/lists">文库</a>
						</li>
						<li <?php if(isset($nav) && $nav=="home") echo 'class="active"';?> >
							<a href="/home">个人中心</a>
						</li>
					</ul>
					<?php 
						if($is_login) {
					?>
						<ul class="nav navbar-nav navbar-right">
							<li class="m-nav-face"><img src="/static/image/face/<?php echo $user_face; ?>.jpg" width="46" /></li>
							<li><a href="/home"><?php echo $user_nickname; ?></a></li>
						</ul>
		    		<?php } else {?>
					
					<div class="navbar-form navbar-right">
		      			<input class="form-control col-md-4" id="loginUser" placeholder="学号/工号" type="text">
		      			<input class="form-control col-md-4" id="loginPass" placeholder="密码/教管密码" type="password">
		      			<button class="btn btn-danger" id="topLogin" >登录</button>
		    		</div>
					<?php }?>
				</div><!-- navbar-header -->
			</div><!-- container -->
		</div><!-- navbar -->
		<div class="container m-container">
<script>
var DOC_IS_LOGIN = <?php echo $is_login ? 'true' : 'false';?>;
</script>
