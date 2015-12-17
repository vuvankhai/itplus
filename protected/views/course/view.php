<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('admin')),
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'Update Course', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Course', 'url'=>array('index')),
);
?>

<h1 class="text-success title">View Course #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'Description',
		'Parent_id',
		'Type',
		'Major_id',
		'Version',
		'Status',
	),
)); ?>
