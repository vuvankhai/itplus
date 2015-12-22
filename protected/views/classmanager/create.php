<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Tạo mới Lớp học</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>