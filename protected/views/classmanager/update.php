<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classmanager', 'url'=>array('index')),
	array('label'=>'Create Classmanager', 'url'=>array('create')),
	array('label'=>'View Classmanager', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Classmanager', 'url'=>array('admin')),
);
?>

<h1>Update Classmanager <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>