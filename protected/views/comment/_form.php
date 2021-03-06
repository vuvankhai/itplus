<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_post:',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'ID_post', Post::getPostOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_post',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Date_comment:',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
		        'booster.widgets.TbDatePicker',
		        array(
		        	'model'=>$model,
		            'name' => 'Comment[Date_comment]',
		            'value'=>$model->Date_comment,
		            'htmlOptions' => array('class'=>'form-control',),
		            'options' => array(
		            	'format'=>'yyyy-mm-dd',
		                'language' => 'vi'
		            )
		        )
		    );
		//echo $form->textField($model,'Date_comment',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Date_comment',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Student:',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Student',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Student',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Content:',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Content',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-sm btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->