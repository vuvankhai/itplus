<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mCustomScrollbar.min.css">

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
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
					<p class="name">
						<?php 
							if(isset(Yii::app()->user->name)){
								echo ucfirst(Yii::app()->user->name);
							}
						?>
					</p>
					<div id="user-dropdown">
						<?php $this->widget('zii.widgets.CMenu',array(
							'itemCssClass'=>'user-btn',
							'items'=>array(
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							),
						)); ?>
					</div>
				</div>
			</div>
			<div class="menu">
				<?php 
					$Menu = new Menu;
					$_menu = $Menu->getMenu(0);
				?>

				<?php $this->widget('zii.widgets.CMenu',array(
					'activeCssClass'=>'menu-active',
					'htmlOptions'=>array('class'=>'list-item'),
					'items'=>$_menu,
				)); ?>
			</div>
		</div>
		<div id="content">
					<?php echo $content; ?>


		</div>
		<div id="footer">
			<p>&copy; 2015 Hoanglv. All Rights Reserved.</p>
		</div>
	</div>
	
</body>

</html>