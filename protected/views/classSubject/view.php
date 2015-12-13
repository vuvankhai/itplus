<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ClassSubject', 'url'=>array('admin')),
	array('label'=>'Create ClassSubject', 'url'=>array('create')),
	array('label'=>'Update ClassSubject', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ClassSubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClassSubject', 'url'=>array('index')),
);
?>

<h1 class="text-success">View ClassSubject #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_Class',
		'ID_Room',
		'ID_Hour',
		'ID_Subject',
		'Start_date',
		'Finish_date',
		'ID_Facuty',
		'Date_Exam',
	),
)); ?>
