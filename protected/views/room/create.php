<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Room', 'url'=>array('admin')),
	array('label'=>'Manage Room', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Create Room</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>