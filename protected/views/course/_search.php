<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array("class"=>'form'),
)); ?>

	<div class="row form-group">
		<?php echo $form->label($model,'ID', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID', array('class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Parent_id', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Parent_id', array('class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Type', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type', array('class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Major_id', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Major_id', array('class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Version', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Version',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->label($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="row form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->