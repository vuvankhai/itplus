<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hour', 'url'=>array('index')),
	array('label'=>'Manage Hour', 'url'=>array('admin')),
);
?>

<h1>Create Hour</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>