<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */

$this->breadcrumbs=array(
	'Grouprules'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Grouprules', 'url'=>array('admin')),
	array('label'=>'Create Grouprules', 'url'=>array('create')),
	array('label'=>'Update Grouprules', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Grouprules', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grouprules', 'url'=>array('index')),
);
?>

<h1 class="text-success">View Grouprules #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_GroupAcc',
		'ID_menu',
		'Status',
	),
)); ?>
