 <?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<div class="form-group <?php if(CHtml::errorSummary($model)) echo 'has-error'; ?>">
		<?php echo $form->labelEx($model,'Username', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Username',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Username', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group <?php if(CHtml::errorSummary($model)) echo 'has-error'; ?>">
		<?php echo $form->labelEx($model,'Password', array('class'=>'control-label')); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Password', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_GroupAcc', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_GroupAcc', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_GroupAcc', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->