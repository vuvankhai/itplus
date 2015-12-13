<?php
/* @var $this MajorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Majors',
);

$this->menu=array(
	array('label'=>'Create Major', 'url'=>array('create')),
	array('label'=>'Manage Major', 'url'=>array('index')),
);
?>

<h1 class="text-success">Majors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
