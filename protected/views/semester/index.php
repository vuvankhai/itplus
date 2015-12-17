<?php
/* @var $this SemesterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Semesters',
);

$this->menu=array(
	array('label'=>'Create Semester', 'url'=>array('create')),
	array('label'=>'Manage Semester', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Semesters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
