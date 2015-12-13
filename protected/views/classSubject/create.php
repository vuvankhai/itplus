<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassSubject', 'url'=>array('admin')),
	array('label'=>'Manage ClassSubject', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create ClassSubject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>