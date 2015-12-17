<?php
/* @var $this AttendanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attendances',
);

$this->menu=array(
	array('label'=>'Create Attendance', 'url'=>array('create')),
	array('label'=>'Manage Attendance', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Attendances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
