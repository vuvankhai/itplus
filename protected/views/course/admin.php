<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#course-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div id="sidebar">
<?php 
	$this->widget('CTreeView',array(
	        'data'=>$dataTree,
	        'animated'=>'fast', //quick animation
	        'collapsed'=>'false',//remember must giving quote for boolean value in here
	        'htmlOptions'=>array(
	        	'id'=>'treeview-catg',
	            'class'=>'treeview-red',//there are some classes that ready to use
	        ),
	));
?>
</div>

<div id="main-content">
	<h1 class="text-success">Manage Courses</h1>

	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-primary btn-sm')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'course-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'itemsCssClass'=>'table table-striped',
		'columns'=>array(
			'ID',
			'Name',
			'Description',
			'Parent_id',
			'Type',
			'Major_id',
			/*
			'Version',
			'Status',
			*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>

</div>