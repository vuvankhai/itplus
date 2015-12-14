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
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Semester',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Semester',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Semester',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Subject',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Subject',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Subject',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Hour',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Hour',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Hour',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->