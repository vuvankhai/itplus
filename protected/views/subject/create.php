<?php
/* @var $this SubjectController */
/* @var $model Subject */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subject', 'url'=>array('admin')),
	array('label'=>'Manage Subject', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Subject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>