<?php
/* @var $this AttendanceDetailController */
/* @var $model AttendanceDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attendance-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Attendance',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Attendance',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Attendance',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Student',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Student',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Student',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->