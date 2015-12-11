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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Session'); ?>
		<?php echo $form->textField($model,'Session'); ?>
		<?php echo $form->error($model,'Session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Present'); ?>
		<?php echo $form->textField($model,'Present'); ?>
		<?php echo $form->error($model,'Present'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Absent'); ?>
		<?php echo $form->textField($model,'Absent'); ?>
		<?php echo $form->error($model,'Absent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Teacher'); ?>
		<?php echo $form->textField($model,'ID_Teacher'); ?>
		<?php echo $form->error($model,'ID_Teacher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_create'); ?>
		<?php echo $form->textField($model,'Date_create'); ?>
		<?php echo $form->error($model,'Date_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->