<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('admin')),
	array('label'=>'Manage Course', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Course</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>