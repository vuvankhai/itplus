<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'semester-subject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Semester'); ?>
		<?php echo $form->textField($model,'ID_Semester'); ?>
		<?php echo $form->error($model,'ID_Semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Subject'); ?>
		<?php echo $form->textField($model,'ID_Subject'); ?>
		<?php echo $form->error($model,'ID_Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hour'); ?>
		<?php echo $form->textField($model,'Hour'); ?>
		<?php echo $form->error($model,'Hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->