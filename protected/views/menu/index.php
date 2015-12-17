<?php
/* @var $this MenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menus',
);

$this->menu=array(
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Manage Menu', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Menus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
