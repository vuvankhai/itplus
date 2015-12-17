<?php
/* @var $this GroupaccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupaccounts',
);

$this->menu=array(
	array('label'=>'Create Groupaccount', 'url'=>array('create')),
	array('label'=>'Manage Groupaccount', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Groupaccounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
