<?php
/* @var $this SemesterController */
/* @var $model Semester */

$this->breadcrumbs=array(
	'Semesters'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Semester', 'url'=>array('index')),
	array('label'=>'Create Semester', 'url'=>array('create')),
	array('label'=>'View Semester', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Semester', 'url'=>array('admin')),
);
?>

<h1>Update Semester <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>