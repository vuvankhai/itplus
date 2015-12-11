<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classmanager', 'url'=>array('index')),
	array('label'=>'Manage Classmanager', 'url'=>array('admin')),
);
?>

<h1>Create Classmanager</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>