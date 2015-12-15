<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Semester', 'url'=>array('admin')),
	array('label'=>'Create Semester', 'url'=>array('create')),
	array('label'=>'Update Semester', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Semester', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Semester', 'url'=>array('index')),
);
?>

<h1 class="text-success">View Semester #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'ID_Course',
	),
)); ?>
