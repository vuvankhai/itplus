<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attendance', 'url'=>array('admin')),
	array('label'=>'Manage Attendance', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Attendance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>