<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'Tạo mới', 'url'=>array('create'), 'itemOptions'=>array('class'=>'success')),
//);

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
<div class="head">
<h1 class="text-success title">Quản lý Lớp môn học</h1>

<div class="fright">
    <?php echo CHtml::ajaxLink("Thêm mới", Yii::app()->createUrl('classsubject/ajaxcreate'), array('update'=>'#dialog-content'), array('class'=>'btn btn-success btn-sm', 'onClick'=>'$("#dialog-content").dialog("option", "title", "Thêm mới").dialog({resizable: false}).dialog("open"); return false;')); ?>
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
	'id'=>'class-subject-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped',
	'columns'=>array(
                array(
                    'name'=>'ID_Class',
                    'value'=>'$data->iDClass->Name',
                ),
                array(
                    'name'=>'ID_Room',
                    'value'=>'$data->iDRoom->Name',
                ),
                array(
                    'name'=>'ID_Hour',
                    'value'=>'$data->iDHour->Type',
                ),
                array(
                    'name'=>'ID_Subject',
                    'value'=>'$data->iDSubject->Name',
                ),
		array(
                    'name'=>'ID_Facuty',
                    'value'=>'$data->iDFacuty->Name',
                ),
		'Start_date',
		'Finish_date',
		/*
		'ID',
		'ID_Class',
		'ID_Room',
		'ID_Hour',
		'ID_Subject',
		'Date_Exam',
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
	                        'url' => '$this->grid->controller->createUrl("classsubject/ajaxview", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Chi tiết'),
                                'click'=>'function(){
                                            $.fn.yiiGridView.update("class-subject-grid", {
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
	                    'delete' => array(
	                  		'label' => '<buttom type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></button>',
	                        'url' => '$this->grid->controller->createUrl("classsubject/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Xóa'),
	                    ),
	                    'update' => array(
	                  		'label' => '<buttom type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></button>',
	                        'url' => '$this->grid->controller->createUrl("classsubject/ajaxupdate", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Cập nhật'),
                                'click'=>'function(){
                                            $.fn.yiiGridView.update("class-subject-grid", {
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
	),
)); ?>

</div>
