<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Room', 'url'=>array('admin')),
	array('label'=>'Create Room', 'url'=>array('create')),
	array('label'=>'Update Room', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Room', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Room', 'url'=>array('index')),
);
?>

<h1 class="text-success">View Room #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Name',
		'Desccription',
	),
)); ?>
