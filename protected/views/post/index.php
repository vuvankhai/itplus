<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
