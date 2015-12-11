<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'class-subject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Class'); ?>
		<?php echo $form->textField($model,'ID_Class'); ?>
		<?php echo $form->error($model,'ID_Class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Room'); ?>
		<?php echo $form->textField($model,'ID_Room'); ?>
		<?php echo $form->error($model,'ID_Room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Hour'); ?>
		<?php echo $form->textField($model,'ID_Hour'); ?>
		<?php echo $form->error($model,'ID_Hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Subject'); ?>
		<?php echo $form->textField($model,'ID_Subject'); ?>
		<?php echo $form->error($model,'ID_Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Start_date'); ?>
		<?php echo $form->textField($model,'Start_date'); ?>
		<?php echo $form->error($model,'Start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Finish_date'); ?>
		<?php echo $form->textField($model,'Finish_date'); ?>
		<?php echo $form->error($model,'Finish_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Facuty'); ?>
		<?php echo $form->textField($model,'ID_Facuty'); ?>
		<?php echo $form->error($model,'ID_Facuty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_Exam'); ?>
		<?php echo $form->textField($model,'Date_Exam'); ?>
		<?php echo $form->error($model,'Date_Exam'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->