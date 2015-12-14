<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'URL', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'URL',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'URL', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>30,'maxlength'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Parent_ID', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Parent_ID',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Parent_ID', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type', array('class'=>'clearboth text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->