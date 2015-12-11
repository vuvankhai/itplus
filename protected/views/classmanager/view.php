<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Classmanager', 'url'=>array('index')),
	array('label'=>'Create Classmanager', 'url'=>array('create')),
	array('label'=>'Update Classmanager', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Classmanager', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classmanager', 'url'=>array('admin')),
);
?>

<h1>View Classmanager #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
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
