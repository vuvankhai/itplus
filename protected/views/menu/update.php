<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Chi tiết', 'url'=>array('view', 'id'=>$model->ID), 'itemOptions'=>array('class'=>'default')),
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<div class="head">
<h1 class="text-success title">Cập nhật <?php echo $model->ID; ?></h1>

<?php 

	$this->beginWidget('zii.widgets.CPortlet');
	$this->widget('zii.widgets.CMenu', array(
		'items'=>$this->menu,
		'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();

?>

</div>

<div class="body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>