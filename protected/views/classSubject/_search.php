<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */
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
		<?php echo $form->label($model,'ID_Class',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Class',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Room',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Room',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Hour',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Hour',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Subject',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Subject',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Start_date',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Start_date',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Finish_date',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Finish_date',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Facuty',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Facuty',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Date_Exam',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Date_Exam',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->