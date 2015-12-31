<div class="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>
</div>
<div class="body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'ID_Class',
		'ID_Room',
		'ID_Hour',
		'ID_Subject',
		'Start_date',
		'Finish_date',
		'ID_Facuty',
		'Date_Exam',
	),
)); ?>

</div>