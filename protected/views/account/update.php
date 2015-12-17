<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('admin')),
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'View Account', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Account', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Update Account <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'user'=>$user)); ?>