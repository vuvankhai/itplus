<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */

$this->breadcrumbs=array(
	'Attendance Details'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List AttendanceDetail', 'url'=>array('index')),
	array('label'=>'Create AttendanceDetail', 'url'=>array('create')),
	array('label'=>'View AttendanceDetail', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage AttendanceDetail', 'url'=>array('admin')),
);
?>

<h1>Update AttendanceDetail <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>