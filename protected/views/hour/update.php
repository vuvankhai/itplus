<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hour', 'url'=>array('admin')),
	array('label'=>'Create Hour', 'url'=>array('create')),
	array('label'=>'View Hour', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Hour', 'url'=>array('index')),
);
?>

<h1 class="text-successs">Update Hour <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>