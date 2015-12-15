<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('admin')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('index')),
);
?>

<h1 class="text-success">View Student #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Firstname',
		'Lastname',
		'Phonenumber',
		'Email',
		'ID_Account',
		'Gender',
		'Birthday',
		'Status',
		'Description',
		'ID_Class',
		'Address',
		'Phone_Parent',
	),
)); ?>
