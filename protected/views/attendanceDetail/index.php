<?php
/* @var $this AttendanceDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attendance Details',
);

$this->menu=array(
	array('label'=>'Create AttendanceDetail', 'url'=>array('create')),
	array('label'=>'Manage AttendanceDetail', 'url'=>array('admin')),
);
?>

<h1>Attendance Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
