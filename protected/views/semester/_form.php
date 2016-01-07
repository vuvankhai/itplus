<?php
/* @var $this SemesterController */
/* @var $model Semester */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'semester-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Name:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>30,'maxlength'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Course:', array('class'=>'control-label')); ?>
		<?php if(Yii::app()->controller->action->id == 'ajaxcreate' || Yii::app()->controller->action->id == 'create')
                            echo $form->textField($model,'ID_Course', array('class'=>'form-control', 'readOnly'=>'readOnly'));
                        else if(Yii::app()->controller->action->id == 'ajaxupdate' || Yii::app()->controller->action->id == 'update')
                            echo $form->dropDownList($model, 'ID_Course', Course::getCourseOptions(), array('class'=>'form-control'));
                            ?>
		<?php echo $form->error($model,'ID_Course',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
	
            <button class="btn btn-primary btn-sm" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->