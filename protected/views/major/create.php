<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Major', 'url'=>array('admin')),
	array('label'=>'Manage Major', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Major</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>