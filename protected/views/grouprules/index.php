<?php
/* @var $this GrouprulesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grouprules',
);

$this->menu=array(
	array('label'=>'Create Grouprules', 'url'=>array('create')),
	array('label'=>'Manage Grouprules', 'url'=>array('admin')),
);
?>

<h1>Grouprules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
