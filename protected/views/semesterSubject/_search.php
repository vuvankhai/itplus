<?php
/* @var $this SemesterSubjectController */
/* @var $model SemesterSubject */
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
		<?php echo $form->label($model,'ID_Semester'); ?>
		<?php echo $form->textField($model,'ID_Semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Subject'); ?>
		<?php echo $form->textField($model,'ID_Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hour'); ?>
		<?php echo $form->textField($model,'Hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->