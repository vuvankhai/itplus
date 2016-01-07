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

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Semester:',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'ID_Semester', Semester::getSemesterOptions() ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Semester',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Subject:',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'ID_Subject', Subject::getSubjectOptions() ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Subject',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Hour:',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Hour',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Hour',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description:',array('class'=>'control-label')); ?>
		<?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-primary btn-sm" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->