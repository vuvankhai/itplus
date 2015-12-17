<?php
/* @var $this SubjectController */
/* @var $model Subject */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Subject', 'url'=>array('admin')),
	array('label'=>'Create Subject', 'url'=>array('create')),
	array('label'=>'Update Subject', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Subject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subject', 'url'=>array('index')),
);
?>

<h1 class="text-success title">View Subject #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'Description',
		'Status',
	),
)); ?>
