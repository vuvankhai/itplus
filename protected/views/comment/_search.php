<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'ID',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_post',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_post',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Date_comment',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Date_comment',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Student',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Student',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Content',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->