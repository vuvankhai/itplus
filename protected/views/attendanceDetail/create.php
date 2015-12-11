<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */

$this->breadcrumbs=array(
	'Attendance Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AttendanceDetail', 'url'=>array('index')),
	array('label'=>'Manage AttendanceDetail', 'url'=>array('admin')),
);
?>

<h1>Create AttendanceDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>