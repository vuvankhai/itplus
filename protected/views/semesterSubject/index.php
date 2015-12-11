<?php
/* @var $this SemesterSubjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Semester Subjects',
);

$this->menu=array(
	array('label'=>'Create SemesterSubject', 'url'=>array('create')),
	array('label'=>'Manage SemesterSubject', 'url'=>array('admin')),
);
?>

<h1>Semester Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>