<?php
/* @var $this ClassSubjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Class Subjects',
);

$this->menu=array(
	array('label'=>'Create ClassSubject', 'url'=>array('create')),
	array('label'=>'Manage ClassSubject', 'url'=>array('admin')),
);
?>

<h1>Class Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
