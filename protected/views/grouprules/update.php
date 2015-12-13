<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */

$this->breadcrumbs=array(
	'Grouprules'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grouprules', 'url'=>array('admin')),
	array('label'=>'Create Grouprules', 'url'=>array('create')),
	array('label'=>'View Grouprules', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Grouprules', 'url'=>array('index')),
);
?>

<h1 class="text-success">Update Grouprules <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>