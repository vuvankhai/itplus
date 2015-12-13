<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */

$this->breadcrumbs=array(
	'Semester Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SemesterSubject', 'url'=>array('admin')),
	array('label'=>'Manage SemesterSubject', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create SemesterSubject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>