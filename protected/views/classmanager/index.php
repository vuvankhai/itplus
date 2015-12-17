<?php
/* @var $this ClassmanagerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classmanagers',
);

$this->menu=array(
	array('label'=>'Create Classmanager', 'url'=>array('create')),
	array('label'=>'Manage Classmanager', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Classmanagers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
