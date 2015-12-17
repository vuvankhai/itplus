<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('admin')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'View Menu', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Menu', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Update Menu <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>