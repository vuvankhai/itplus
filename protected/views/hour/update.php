<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Chi tiết', 'url'=>array('view', 'id'=>$model->ID), 'itemOptions'=>array('class'=>'default')),
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-successs title">Cập nhật <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>