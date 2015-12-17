<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('admin')),
	array('label'=>'Manage Account', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Account</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>