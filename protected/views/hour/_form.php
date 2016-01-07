<?php
/* @var $this HourController */
/* @var $model Hour */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hour-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Value:',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Value',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Value'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type:',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type',array('size'=>1,'maxlength'=>1, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-sm btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->