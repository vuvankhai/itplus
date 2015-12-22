<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('course/create/ID/'.$id), 'itemOptions'=>array('class'=>'success')),
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
// echo '<pre>';print_r($this->getMenuTree());exit();
        $this->widget('CTreeView', array(
            'data' => TreeView::getMenuTree(),
            'animated'=>'fast', 
	        //'collapsed'=>'false',
	        'htmlOptions'=>array(
	        	'id'=>'treeview-catg',
	            'class'=>'treeview-gray',
	        ),
));
?>
 
</div>
  
<div id="main-content">
	<h1 class="text-success title">Quản lý Khóa học</h1>

	<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
	<!-- <div class="search-form" style="display:none"> -->
	<?php //$this->renderPartial('_search',array(
		//'model'=>$model,
	//)); ?>
	<!-- </div>search-form -->

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
	            'header' => '<span class="glyphicon glyphicon-cog" ></span>',
	            'htmlOptions' => array(
	                            'style' => 'width: 100px; text-align: center;',
			            ),
			            'class' => 'CButtonColumn',
			            'template' => '{view} {update} {delete}',
			            'buttons' => array(
		                    'view'=>array(
		                    	'label' => '<buttom type="button" class="btn btn-primary btn-xs glyphicon glyphicon-eye-open"></button>',
		                        'url' => '$this->grid->controller->createUrl("course/view", array("id"=>$data->primaryKey,"type"=>$data->ID))',
		                        'imageUrl' => false,
		                        'options'=>array('title'=>'Chi tiết'),
		                    ),
		                    'delete' => array(
		                  		'label' => '<buttom type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></button>',
		                        'url' => '$this->grid->controller->createUrl("course/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
		                        'imageUrl' => false,
		                        'options'=>array('title'=>'Xóa'),
		                    ),
		                    'update' => array(
		                  		'label' => '<buttom type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></button>',
		                        'url' => '$this->grid->controller->createUrl("course/update", array("id"=>$data->primaryKey,"type"=>$data->ID))',
		                        'imageUrl' => false,
		                        'options'=>array('title'=>'Cập nhật'),
		                    ),
	            		),
	        ),
		),
	)); ?>

</div>