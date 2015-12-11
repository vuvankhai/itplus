<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */
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
		<?php echo $form->label($model,'ID_Class'); ?>
		<?php echo $form->textField($model,'ID_Class'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Room'); ?>
		<?php echo $form->textField($model,'ID_Room'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Hour'); ?>
		<?php echo $form->textField($model,'ID_Hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Subject'); ?>
		<?php echo $form->textField($model,'ID_Subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Start_date'); ?>
		<?php echo $form->textField($model,'Start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Finish_date'); ?>
		<?php echo $form->textField($model,'Finish_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Facuty'); ?>
		<?php echo $form->textField($model,'ID_Facuty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Exam'); ?>
		<?php echo $form->textField($model,'Date_Exam'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->