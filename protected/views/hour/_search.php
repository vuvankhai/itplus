<?php
/* @var $this HourController */
/* @var $model Hour */
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
		<?php echo $form->label($model,'Value',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Value',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Type',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type',array('size'=>1,'maxlength'=>1,'class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->