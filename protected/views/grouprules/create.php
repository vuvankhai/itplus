<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */

$this->breadcrumbs=array(
	'Grouprules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grouprules', 'url'=>array('admin')),
	array('label'=>'Manage Grouprules', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Grouprules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>