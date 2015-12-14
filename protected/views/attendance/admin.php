<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Attendance', 'url'=>array('admin')),
	array('label'=>'Create Attendance', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#attendance-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="text-success">Manage Attendances</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'attendance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped',
	'columns'=>array(
		'ID',
		'Session',
		'Present',
		'Absent',
		'ID_Teacher',
		'Date_create',
		array(
            'header' => '<span class="glyphicon glyphicon-cog" ></span>',
            'htmlOptions' => array(
                            'style' => 'width: 100px; text-align: center;',
		            ),
		            'class' => 'CButtonColumn',
		            'template' => '{view} {update} {delete}',
		            'buttons' => array(
	                    'view'=>array(
	                    	'label' => '<span class="glyphicon glyphicon-eye-open"></span>',
	                        'url' => '$this->grid->controller->createUrl("attendance/view", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Chi tiết'),
	                    ),
	                    'delete' => array(
	                  		'label' => '<span class="glyphicon glyphicon-trash"></span>',
	                        'url' => '$this->grid->controller->createUrl("attendance/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Xóa'),
	                    ),
	                    'update' => array(
	                  		'label' => "<span class='glyphicon glyphicon-pencil'></span>",
	                        'url' => '$this->grid->controller->createUrl("attendance/update", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Cập nhật'),
	                    ),
            		),
        ),
	),
)); ?>
