<?php
/* @var $this GroupaccountController */
/* @var $model Groupaccount */

$this->breadcrumbs=array(
	'Groupaccounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Groupaccount', 'url'=>array('admin')),
	array('label'=>'Manage Groupaccount', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create Groupaccount</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>