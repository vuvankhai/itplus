<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Name',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description',array('class'=>'text-danger')); ?>
	</div>
<?php
    //var_dump(Course::model()->find(' ID = :id', array('id'=>$id)));die();
?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'Parent_id',array('class'=>'control-label')); ?>
		<?php   if(Yii::app()->controller->action->id == 'ajaxcreate') 
                    echo $form->textField($model,'Parent_id', array('class'=>'form-control', 'readOnly'=>'readOnly')); 
                else if(Yii::app()->controller->action->id == 'ajaxupdate')
                    echo $form->dropDownList($model,'Parent_id', Course::getCourseOptions(),array('class'=>'form-control')); 
                ?>
		<?php echo $form->error($model,'Parent_id',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Major_id',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Major_id', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Major_id',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Version',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Version',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Version',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->