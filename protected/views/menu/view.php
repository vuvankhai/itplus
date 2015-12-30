<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Cập nhật', 'url'=>array('update', 'id'=>$model->ID), 'itemOptions'=>array('class'=>'warning')),
	array('label'=>'Xóa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Bạn có chắc chắn muốn xóa không?'), 'itemOptions'=>array('class'=>'danger')),
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<div class="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>

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
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'URL',
		'Status',
		'Parent_ID',
		'Type',
	),
)); ?>

</div>