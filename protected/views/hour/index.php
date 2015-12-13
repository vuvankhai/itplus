<?php
/* @var $this HourController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hours',
);

$this->menu=array(
	array('label'=>'Create Hour', 'url'=>array('create')),
	array('label'=>'Manage Hour', 'url'=>array('index')),
);
?>

<h1 class="text-successs">Hours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
