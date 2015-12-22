<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */

$this->breadcrumbs=array(
	'Semester Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Quản lý', 'url'=>array('index'), 'itemOptions'=>array('class'=>'primary')),
);
?>

<h1 class="text-success title">Tạo mới Học kỳ môn học</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>