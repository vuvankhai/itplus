<?php
/* @var $this DomainController */
/* @var $model Domain */

$this->breadcrumbs=array(
	'Domains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('admin')),
	array('label'=>'Manage Domain', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create Domain</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>