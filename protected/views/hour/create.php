<?php
/* @var $this HourController */
/* @var $model Hour */

$this->breadcrumbs=array(
	'Hours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-successs title">Tạo mới Giờ học</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>