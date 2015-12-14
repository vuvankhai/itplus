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
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Class',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Class',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Class',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Room',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Room',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Room',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Hour',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Hour',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Hour',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Subject',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Subject',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Subject',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Start_date',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Start_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Start_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Finish_date',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Finish_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Finish_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Facuty',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Facuty',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Facuty',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Date_Exam',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Date_Exam',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Date_Exam',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->