<?php
/* @var $this AttendanceController */
/* @var $model Attendance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attendance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Session',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Session',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Session',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Present',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Present',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Present',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Absent',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Absent',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Absent',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Teacher',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Teacher',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Teacher',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Date_create',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
		        'booster.widgets.TbDatePicker',
		        array(
		        	'model'=>$model,
		            'name' => 'Attendance[Date_create]',
		            'value'=>$model->Date_create,
		            'htmlOptions' => array('class'=>'form-control',),
		            'options' => array(
		            	'format'=>'yyyy-mm-dd',
		                'language' => 'vi'
		            )
		        )
		    );
		//echo $form->textField($model,'Date_create',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Date_create',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->