<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Tạo mới Điểm danh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>