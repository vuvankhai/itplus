<?php
/* @var $this SubjectController */
/* @var $model Subject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->