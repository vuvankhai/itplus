<?php
/* @var $this AttendanceController */
/* @var $model Attendance */
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
		<?php echo $form->label($model,'Session'); ?>
		<?php echo $form->textField($model,'Session'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Present'); ?>
		<?php echo $form->textField($model,'Present'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Absent'); ?>
		<?php echo $form->textField($model,'Absent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Teacher'); ?>
		<?php echo $form->textField($model,'ID_Teacher'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_create'); ?>
		<?php echo $form->textField($model,'Date_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->