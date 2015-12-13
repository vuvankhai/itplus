<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */

$this->breadcrumbs=array(
	'Semester Subjects'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List SemesterSubject', 'url'=>array('admin')),
	array('label'=>'Create SemesterSubject', 'url'=>array('create')),
	array('label'=>'Update SemesterSubject', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete SemesterSubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SemesterSubject', 'url'=>array('index')),
);
?>

<h1 class="text-success">View SemesterSubject #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_Semester',
		'ID_Subject',
		'Hour',
		'Description',
	),
)); ?>
