<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hour', 'url'=>array('admin')),
	array('label'=>'Manage Hour', 'url'=>array('index')),
);
?>

<h1 class="text-successs title">Create Hour</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>