<?php
/* @var $this GroupaccountController */
/* @var $model Groupaccount */

$this->breadcrumbs=array(
	'Groupaccounts'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Groupaccount', 'url'=>array('admin')),
	array('label'=>'Create Groupaccount', 'url'=>array('create')),
	array('label'=>'Update Groupaccount', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Groupaccount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupaccount', 'url'=>array('index')),
);
?>

<h1 class="text-success title">View Groupaccount #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
	),
)); ?>
