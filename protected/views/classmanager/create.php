<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classmanager', 'url'=>array('admin')),
	array('label'=>'Manage Classmanager', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Classmanager</h1>
<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>