<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Tạo mới Lớp môn học</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>