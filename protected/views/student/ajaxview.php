
<div calss="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>
</div>
<div class="body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'ID',
		'Firstname',
		'Lastname',
		'Phonenumber',
		'Email',
		'ID_Account',
		'Gender',
		'Birthday',
		'Status',
		'Description',
		'ID_Class',
		'Address',
		'Phone_Parent',
	),
)); ?>
</div>