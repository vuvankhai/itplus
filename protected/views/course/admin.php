<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);
//$this->widget('zii.widgets.CBreadcrumbs', array(
//    'links'=>$this->breadcrumbs
//));
//$this->menu=array(
//	array('label'=>'Tạo mới', 'url'=>array('course/create/ID/'.$_SESSION['course_id']), 'itemOptions'=>array('class'=>'success')),
//);

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

<div id="tree-view-wrap">
 <?php
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
  
<div class="content">
    <div class="head">
        <h1 class="text-success title">Quản lý Khóa học</h1>
    <div class="fright">
        <?php echo CHtml::ajaxLink("<span class='glyphicon glyphicon-plus'></span>Thêm mới", Yii::app()->createUrl('course/ajaxcreate/ID/'.$_SESSION['course_id']), array('update'=>'#dialog-content'), array('class'=>'btn btn-success btn-sm', 'onClick'=>'$("#dialog-content").dialog("option", "title", "Thêm mới").dialog({resizable: false}).dialog("open"); return false;')); ?>
    </div>
    <?php 
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
         'id'=>'dialog-content',
         'options'=>array(
             'title'=>'Menu Dialog',
             'autoOpen'=>false,
             'modal'=>true,
             'width'=>'auto',
             'height'=>'auto',
             'position'=>array(400, 50),
         ),
       ));

    $this->endWidget('zii.widgets.jui.CJuiDialog');

    ?>
    </div>
	

	<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
	<!-- <div class="search-form" style="display:none"> -->
	<?php //$this->renderPartial('_search',array(
		//'model'=>$model,
	//)); ?>
	<!-- </div>search-form -->
        <div class="body">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'course-grid',
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'itemsCssClass'=>'table table-bordered',
		'columns'=>array(
                    'Name',
                    'Code', 
                    'Version',
                    'Status',
                    /*
                    'ID',
                    'Description',
                    'Parent_id',
                    'Major_id',
                    */
                    array(
                        'header' => 'Chi tiết',
                        'htmlOptions' => array(
                                        'style' => 'width: 70px; text-align: center;',
                                        ),
                                        'class' => 'CButtonColumn',
                                        'template' => '{view}',
                                        'buttons' => array(
                                        'view'=>array(
                                            'label' => '<buttom type="button" class="btn btn-primary btn-xs glyphicon glyphicon-eye-open"></button>',
                                            'url' => '$this->grid->controller->createUrl("course/ajaxview", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                            'imageUrl' => false,
                                            'options'=>array('title'=>'Chi tiết'),
                                            'click'=>'function(){
                                                        $.fn.yiiGridView.update("course-grid", {
                                                            type: "GET",
                                                            url: $(this).attr("href"),
                                                            success: function(data){
                                                                $("#dialog-content").html(data);
                                                                $("#dialog-content").dialog("option", "title", "Chi tiết").dialog("open");;
                                                            }
                                                        })
                                                        return false;
                                                    }'
                                        ),
                                    ),
                    ),
                    array(
                        'header' => 'Cập nhật',
                        'htmlOptions' => array(
                                        'style' => 'width: 80px; text-align: center;',
                                        ),
                                        'class' => 'CButtonColumn',
                                        'template' => '{update}',
                                        'buttons' => array(
                                        'update' => array(
                                            'label' => '<buttom type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></button>',
                                            'url' => '$this->grid->controller->createUrl("course/ajaxupdate", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                            'imageUrl' => false,
                                            'options'=>array('title'=>'Cập nhật'),
                                            'click'=>'function(){
                                                        $.fn.yiiGridView.update("course-grid", {
                                                            type: "GET",
                                                            url: $(this).attr("href"),
                                                            success: function(data){
                                                                $("#dialog-content").html(data);
                                                                $("#dialog-content").dialog("option", "title", "Chi tiết").dialog("open");;
                                                            }
                                                        })
                                                        return false;
                                                    }'
                                        ),
                                    ),
                    ),
                    array(
                        'header' => 'Xóa',
                        'htmlOptions' => array(
                                            'style' => 'width: 60px; text-align: center;',
                                        ),
                                        'class' => 'CButtonColumn',
                                        'template' => '{delete}',
                                        'buttons' => array(
                                            'delete' => array(
                                                'label' => '<buttom type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></button>',
                                                'url' => '$this->grid->controller->createUrl("course/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
                                                'imageUrl' => false,
                                                'options'=>array('title'=>'Xóa'),
                                            ),
                                        ),
                    ),
		),
	)); ?>
        </div>
</div>