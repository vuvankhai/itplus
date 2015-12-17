<?php
/* @var $this RoomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rooms',
);

$this->menu=array(
	array('label'=>'Create Room', 'url'=>array('create')),
	array('label'=>'Manage Room', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Rooms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
