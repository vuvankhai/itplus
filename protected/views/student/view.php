
<div calss="head">
<h1 class="text-success title">Chi tiết #<?php echo $model->ID; ?></h1>
</div>
<div class="body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'Lastname',
		'Firstname',
		'Phonenumber',
		'Email',
		array(
                    'name'=>'ID_Account',
                    'value'=>$model->iDAccount->Username),
		array(
                    'name'=>'Gender',
                    'value'=>$model->getGender($model->Gender)),
		'Birthday',
		array('name'=>'Status',
                    'value'=>$model->getStatus($model->Status)),
		'Description',
		array('name'=>'ID_Class',
                    'value'=>$model->iDClass->Name),
		'Address',
		'Phone_Parent',
	),
)); ?>
</div>