<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>
<div class="head">
    <h1 class="text-success title">Tạo mới Menu</h1>

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