<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Manage',
);

//$this->widget('zii.widgets.CBreadcrumbs', array(
//    'links'=>$this->breadcrumbs,
//    'separator'=>'<span class="separator">/</span>',
//));

//$this->menu=array(array('label'=>'Thêm mới', 'url'=>array('create'),linkOptions'=>array('class'=>'btn btn-success btn-sm' )));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="head">
<h1 class="text-success title">Quản lý Menus</h1>

<?php 

//	$this->beginWidget('zii.widgets.CPortlet');
//	$this->widget('zii.widgets.CMenu', array(
//		'items'=>$this->menu,
//		'htmlOptions'=>array('class'=>'operations'),
//	));
//	$this->endWidget();
?>
<div class="fright">
    <?php echo CHtml::ajaxLink("<span class='glyphicon glyphicon-plus'></span>Thêm mới", Yii::app()->createUrl('menu/ajaxcreate'), array('update'=>'#dialog-content'), array('class'=>'btn btn-success btn-sm', 'onClick'=>'$("#dialog-content").dialog("option", "title", "Thêm mới").dialog({resizable: false}).dialog("open"); return false;')); ?>
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
    
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
<!-- <div class="search-form" style="display:none"> -->
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
<!-- </div>search-form -->
<?php 
    Yii::app()->clientScript->registerScript("update","
            function ajaxUpdate(){
                
            }
        ");

?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'itemsCssClass'=>'table table-bordered',
	'columns'=>array(
		/*'ID',
		'Type',
		'Status',*/
		'Name',
		'URL',
                array(
                    'name'=>'Parent_ID',
                    'value'=>'Menu::getMenuParent($data->Parent_ID)',
                ),
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
                                        'url' => '$this->grid->controller->createUrl("menu/ajaxview", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Chi tiết'),
                                        'click'=>'function(){
                                                    $.fn.yiiGridView.update("menu-grid", {
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
                                        'url' => '$this->grid->controller->createUrl("menu/ajaxupdate", array("id"=>$data->primaryKey,"type"=>$data->ID))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Cập nhật'),
                                        'click'=>'function(){
                                                    $.fn.yiiGridView.update("menu-grid", {
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
                                        'url' => '$this->grid->controller->createUrl("menu/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
                                        'imageUrl' => false,
                                        'options'=>array('title'=>'Xóa'),
                                    ),
                                ),
                ),
	),
)); ?>
</div>