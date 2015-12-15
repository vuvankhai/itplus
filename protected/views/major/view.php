<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Major', 'url'=>array('admin')),
	array('label'=>'Create Major', 'url'=>array('create')),
	array('label'=>'Update Major', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Major', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Major', 'url'=>array('index')),
);
?>

<h1 class="text-success">View Major #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'Description',
	),
)); ?>
