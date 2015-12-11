<?php
/* @var $this GroupaccountController */
/* @var $model Groupaccount */

$this->breadcrumbs=array(
	'Groupaccounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Groupaccount', 'url'=>array('index')),
	array('label'=>'Manage Groupaccount', 'url'=>array('admin')),
);
?>

<h1>Create Groupaccount</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>