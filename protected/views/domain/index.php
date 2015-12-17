<?php
/* @var $this DomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Domains',
);

$this->menu=array(
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1 class="text-success title">Domains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
