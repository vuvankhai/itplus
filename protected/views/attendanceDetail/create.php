<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */

$this->breadcrumbs=array(
	'Attendance Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Tạo mới Điểm danh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>