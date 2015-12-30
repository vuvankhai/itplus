<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Manage',
);

?>
<div class="head">
<h1 class="text-success title">Điểm danh</h1>
<?php 
	$this->beginWidget('zii.widgets.CPortlet');
	$this->widget('zii.widgets.CMenu', array(
		'items'=>$this->menu,
		'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();
?>
</div>
<div class="body">
<?php $this->renderPartial('_form_attendance', array('classmanager'=>$classmanager,'model'=>$model)); ?>
</div>