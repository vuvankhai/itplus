<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('admin')),
	array('label'=>'Manage Users', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>