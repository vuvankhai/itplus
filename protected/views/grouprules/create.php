<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */

$this->breadcrumbs=array(
	'Grouprules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grouprules', 'url'=>array('index')),
	array('label'=>'Manage Grouprules', 'url'=>array('admin')),
);
?>

<h1>Create Grouprules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>