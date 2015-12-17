<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */

$this->breadcrumbs=array(
	'Semester Subjects'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List SemesterSubject', 'url'=>array('admin')),
	array('label'=>'Create SemesterSubject', 'url'=>array('create')),
	array('label'=>'View SemesterSubject', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage SemesterSubject', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Update SemesterSubject <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>