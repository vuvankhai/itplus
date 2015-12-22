<?php
/* @var $this SemesterController */
/* @var $model Semester */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('form'),
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'ID',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Name',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>30,'maxlength'=>30, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Course',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Course', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->