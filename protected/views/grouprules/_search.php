<?php
/* @var $this GrouprulesController */
/* @var $model Grouprules */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'ID', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_GroupAcc', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_GroupAcc', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_menu', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_menu', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->