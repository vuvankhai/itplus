<?php
/* @var $this DomainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Domains',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Quản lý', 'url'=>array('admin'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Domains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
