<?php
/* @var $this GroupaccountController */
/* @var $model Groupaccount */

$this->breadcrumbs=array(
	'Groupaccounts'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Groupaccount', 'url'=>array('admin')),
	array('label'=>'Create Groupaccount', 'url'=>array('create')),
	array('label'=>'View Groupaccount', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Groupaccount', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Update Groupaccount <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>