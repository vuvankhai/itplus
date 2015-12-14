<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Major', 'url'=>array('admin')),
	array('label'=>'Create Major', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#major-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="text-success">Manage Majors</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'major-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped',
	'columns'=>array(
		'ID',
		'Name',
		'Description',
		array(
            'header' => '<span class="glyphicon glyphicon-cog" ></span>',
            'htmlOptions' => array(
                            'style' => 'width: 100px; text-align: center;',
		            ),
		            'class' => 'CButtonColumn',
		            'template' => '{view} {update} {delete}',
		            'buttons' => array(
	                    'view'=>array(
	                    	'label' => '<button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-eye-open"></button>',
	                        'url' => '$this->grid->controller->createUrl("major/view", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Chi tiết'),
	                    ),
	                    'delete' => array(
	                  		'label' => '<button type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></button>',
	                        'url' => '$this->grid->controller->createUrl("major/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Xóa'),
	                    ),
	                    'update' => array(
	                  		'label' => '<button type="button" class="btn btn-success btn-xs glyphicon glyphicon-pencil"></button>',
	                        'url' => '$this->grid->controller->createUrl("major/update", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Cập nhật'),
	                    ),
            		),
        ),
	),
)); ?>
