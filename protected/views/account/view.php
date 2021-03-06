<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Thêm mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
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
		'Username',
		'Password',
		'Type',
		'Status',
		'ID_GroupAcc',
	),
)); ?>
