<div class="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>
</div>
<div class="body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'ID_Semester',
		'ID_Subject',
		'Hour',
		'Description',
	),
)); ?>
</div>