<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Manage',
);

$this->menu=array(
                array(
                    'label'=>'Thêm mới', 
                    'url'=>array('create'), 
                    'itemOptions'=>array(
                                'class'=>'success'
                                ),
                    'linkOptions' => array(
                                'ajax' => array(
                                    'type'=>'POST',
                                    'url'=>array('create'),
                                    'success'=>'js:{function(data){$("#create").html(data);}',
                                ),
                            ),
                ), 
        );

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

    echo CHtml::ajaxLink("Thêm mới", 'create', array('update'=>'#create'), array('class'=>'btn btn-success btn-sm'))

?>
</div>
    <?php 
    $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
                'id'=>'juiDialog',
                'options'=>array(
                    'title'=>'Show data',
                    'autoOpen'=>true,
                    'modal'=>true,
                    'width'=>'auto',
                    'height'=>'auto',
                ),
        ));
    $this->endWidget('zii.widgets.jui.CJuiDialog');

    // the link that may open the dialog

    echo CHtml::ajaxLink('Link', 'create', array(
                                'onclick'=>'$("#juiDialog").dialog("open"); return false;',
                                'update'=>'#juiDialog',
                                )
                 );
?>
<div id="create">
</div>
<div class="body">
    
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default btn-sm')); ?>
<!-- <div class="search-form" style="display:none"> -->
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
<!-- </div>search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped',
	'columns'=>array(
		'ID',
		'Name',
		'URL',
		'Status',
		'Parent_ID',
		'Type',
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
	                        'url' => '$this->grid->controller->createUrl("menu/view", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Chi tiết'),
	                    ),
	                    'delete' => array(
	                  		'label' => '<buttom type="button" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></button>',
	                        'url' => '$this->grid->controller->createUrl("menu/delete", array("id"=>$data->primaryKey,"type"=>$data->ID ))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Xóa'),
	                    ),
	                    'update' => array(
	                  		'label' => '<buttom type="button" class="btn btn-warning btn-xs glyphicon glyphicon-pencil"></button>',
	                        'url' => '$this->grid->controller->createUrl("menu/update", array("id"=>$data->primaryKey,"type"=>$data->ID))',
	                        'imageUrl' => false,
	                        'options'=>array('title'=>'Cập nhật'),
	                    ),
            		),
        ),
	),
)); ?>
</div>