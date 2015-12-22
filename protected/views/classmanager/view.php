<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('classmanager/create/ID/'.$_SESSION['course_id']), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Cập nhật', 'url'=>array('update', 'id'=>$model->ID), 'itemOptions'=>array('class'=>'warning')),
	array('label'=>'Xóa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Bạn có chắc chắn muốn xóa không?'), 'itemOptions'=>array('class'=>'danger')),
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'Description',
		'Code',
		'Code_ITI',
		'Start_date',
		'Finish_date',
		'Numberofstudent',
		'ID_course',
		'Facuty_id',
		'Status',
	),
)); ?>
