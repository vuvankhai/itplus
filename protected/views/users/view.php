<div class="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>
</div>
<div class="body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		array('name'=>'ID_Account',
                    'value'=>$model->iDAccount->Username),
		'Name',
		'Phonenumber',
		'Email',
		'Address',
		'Description',
		'Avatar',
		array('name'=>'Status',
                    'value'=>$model->getStatus($model->Status)),
	),
)); ?>
</div>