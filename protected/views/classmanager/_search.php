<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */
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
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Code'); ?>
		<?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Code_ITI'); ?>
		<?php echo $form->textField($model,'Code_ITI',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'Numberofstudent'); ?>
		<?php echo $form->textField($model,'Numberofstudent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_course'); ?>
		<?php echo $form->textField($model,'ID_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facuty_id'); ?>
		<?php echo $form->textField($model,'Facuty_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->