<?php
/* @var $this DomainController */
/* @var $model Domain */

$this->breadcrumbs=array(
	'Domains'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('index')),
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'Update Domain', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Domain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>View Domain #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Name',
		'Type',
	),
)); ?>
