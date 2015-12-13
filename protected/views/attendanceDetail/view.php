<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */

$this->breadcrumbs=array(
	'Attendance Details'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List AttendanceDetail', 'url'=>array('admin')),
	array('label'=>'Create AttendanceDetail', 'url'=>array('create')),
	array('label'=>'Update AttendanceDetail', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete AttendanceDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AttendanceDetail', 'url'=>array('index')),
);
?>

<h1 class="text-success">View AttendanceDetail #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_Attendance',
		'ID_Student',
		'Status',
	),
)); ?>
