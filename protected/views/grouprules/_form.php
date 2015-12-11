<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grouprules-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_GroupAcc'); ?>
		<?php echo $form->textField($model,'ID_GroupAcc'); ?>
		<?php echo $form->error($model,'ID_GroupAcc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_menu'); ?>
		<?php echo $form->textField($model,'ID_menu'); ?>
		<?php echo $form->error($model,'ID_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->