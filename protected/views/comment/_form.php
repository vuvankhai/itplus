<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_post'); ?>
		<?php echo $form->textField($model,'ID_post'); ?>
		<?php echo $form->error($model,'ID_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date_comment'); ?>
		<?php echo $form->textField($model,'Date_comment'); ?>
		<?php echo $form->error($model,'Date_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Student'); ?>
		<?php echo $form->textField($model,'Student',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Student'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Content'); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->