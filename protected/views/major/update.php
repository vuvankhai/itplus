<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Major', 'url'=>array('index')),
	array('label'=>'Create Major', 'url'=>array('create')),
	array('label'=>'View Major', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Major', 'url'=>array('admin')),
);
?>

<h1>Update Major <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>