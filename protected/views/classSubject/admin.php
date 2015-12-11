<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClassSubject', 'url'=>array('index')),
	array('label'=>'Create ClassSubject', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#class-subject-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Class Subjects</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'class-subject-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'ID_Class',
		'ID_Room',
		'ID_Hour',
		'ID_Subject',
		'Start_date',
		/*
		'Finish_date',
		'ID_Facuty',
		'Date_Exam',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
