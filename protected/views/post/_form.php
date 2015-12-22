<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Account',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Account', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Account', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Title',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Title',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Title', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Date_post',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Date_post', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Date_post', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Content',array('class'=>'control-label')); ?>
		<?php echo $form->textArea($model,'Content',array('form-groups'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Content', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->