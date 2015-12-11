<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classmanager-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Code_ITI'); ?>
		<?php echo $form->textField($model,'Code_ITI',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Code_ITI'); ?>
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
		<?php echo $form->labelEx($model,'Numberofstudent'); ?>
		<?php echo $form->textField($model,'Numberofstudent'); ?>
		<?php echo $form->error($model,'Numberofstudent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_course'); ?>
		<?php echo $form->textField($model,'ID_course'); ?>
		<?php echo $form->error($model,'ID_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Facuty_id'); ?>
		<?php echo $form->textField($model,'Facuty_id'); ?>
		<?php echo $form->error($model,'Facuty_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->