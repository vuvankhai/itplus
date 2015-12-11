<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdown.js"></script>
</head>
<body>

	<div id="wrapper">
		<div id="header">
			<div class="top-head">
				<div class="wrap-logo">
					<a href="#" class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" border="0"/></a>
					<p class="description">Phần mền quản lý học viên ITPlus-Academy</p>
				</div>
				<div id="box-user">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/admin.png"/>
					<p class="name">Administrator</p>
					<div id="user-dropdown">
						<?php $this->widget('zii.widgets.CMenu',array(
							'itemCssClass'=>'btn btn-default btn-sm',
							'items'=>array(
								array('label'=>'Profile', 'url'=>array('user/profile')),
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							),
						)); ?>
					</div>
				</div>
			</div>
			<div class="menu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'htmlOptions'=>array('class'=>'list-item'),
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div>
		</div>
		<div id="content">
			<div id="main-content">
				<div class="container-fluid">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy; 2015 Hoanglv. All Rights Reserved.</p>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var h_header = $("#header").height();
			var h_footer = $("#footer").height();
			var height = $(window).height() - h_header - h_footer;
			$("#content").css('height', height+"px");

		})
	</script>
</body>

</html>