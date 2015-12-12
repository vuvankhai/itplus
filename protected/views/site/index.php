<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
	if(Yii::app()->user->isGuest)
		$this->redirect(Yii::app()->request->baseUrl.'/index.php/site/login');
?>


<h1>Chao mung toi trang quan ly hoc vien cua ITPlus-Academy</h1>
