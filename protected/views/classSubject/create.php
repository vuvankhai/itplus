<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassSubject', 'url'=>array('index')),
	array('label'=>'Manage ClassSubject', 'url'=>array('admin')),
);
?>

<h1>Create ClassSubject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>