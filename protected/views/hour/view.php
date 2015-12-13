<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Hour', 'url'=>array('admin')),
	array('label'=>'Create Hour', 'url'=>array('create')),
	array('label'=>'Update Hour', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Hour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hour', 'url'=>array('index')),
);
?>

<h1 class="text-successs">View Hour #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Value',
		'Type',
	),
)); ?>
