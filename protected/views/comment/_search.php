<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_post'); ?>
		<?php echo $form->textField($model,'ID_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_comment'); ?>
		<?php echo $form->textField($model,'Date_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Student'); ?>
		<?php echo $form->textField($model,'Student',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Content'); ?>
		<?php echo $form->textField($model,'Content',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->