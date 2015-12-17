<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */

$this->breadcrumbs=array(
	'Attendance Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AttendanceDetail', 'url'=>array('admin')),
	array('label'=>'Manage AttendanceDetail', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create AttendanceDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>