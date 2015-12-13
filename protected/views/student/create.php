<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('admin')),
	array('label'=>'Manage Student', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create Student</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>