<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Semester', 'url'=>array('admin')),
	array('label'=>'Manage Semester', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Semester</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>