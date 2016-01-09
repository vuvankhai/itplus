<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */

$this->breadcrumbs=array(
	'Classmanagers'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Tạo mới', 'url'=>array('classmanager/create/ID/'.$_SESSION['course_id']), 'itemOptions'=>array('class'=>'success')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#classmanager-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div id="tree-view-wrap">
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

<div class="content">
    <div class="head">
        <h1 class="text-success title">Quản lý Lớp học</h1>
        <div class="fright">

            <?php echo CHtml::ajaxLink("<span class='glyphicon glyphicon-plus'></span>Thêm mới", Yii::app()->createUrl('classmanager/ajaxcreate/ID/'.$_SESSION['course_id']), array('update'=>'#dialog-content'), array('class'=>'btn btn-success btn-sm', 'onClick'=>'$("#dialog-content").dialog("option", "title", "Thêm mới").dialog({resizable: false}).dialog("open"); return false;')); ?>
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
    <div class="body">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'classmanager-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'columns'=>array(
                array(
                    'class'=>'CLinkColumn',
                    'labelExpression'=>'$data->Name',
                    'urlExpression'=>'array("student/index", "cID"=>$data->ID)',
                ),
		'Code',
		'Code_ITI',
		'Start_date',
		'Finish_date',
		/*
		'ID',
		'Name',
		'Numberofstudent',
		'ID_course',
		'Facuty_id',
		'Description',
		'Status',
		*/
		array(
                    'header' => 'Chi tiết',
                    'htmlOptions' => array(
                                    'style' => 'width: 100px; text-align: center;',
                                    ),
                                    'class' => 'CButtonColumn',
                                    'template' => '{view}',
                                    'buttons' => array(
                                    'view'=>array(
                                        'label' => '<buttom type="button" class="btn btn-primary btn-xs glyphicon glyphicon-eye-open"></button>',
                                        'url' => '$this->grid->controller->createUrl("classmanager/ajaxview", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Chi tiết'),
                                        'click'=>'function(){
                                                    $.fn.yiiGridView.update("classmanager-grid", {
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
                                        'url' => '$this->grid->controller->createUrl("classmanager/ajaxupdate", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Cập nhật'),
                                        'click'=>'function(){
                                                    $.fn.yiiGridView.update("classmanager-grid", {
                                                        type: "GET",
                                                        url: $(this).attr("href"),
                                                        success: function(data){
                                                            $("#dialog-content").html(data);
                                                            $("#dialog-content").dialog("option", "title", "Cập nhật").dialog("open");;
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
                                        'url' => '$this->grid->controller->createUrl("classmanager/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Xóa'),
                                    ),
                                ),
                ),
	),
)); ?>
    </div>
</div>
