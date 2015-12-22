<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */
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
		<?php echo $form->label($model,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Code', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Code_ITI', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Code_ITI',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Start_date', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Start_date', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Finish_date', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Finish_date', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Numberofstudent', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Numberofstudent', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_course', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_course', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Facuty_id', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Facuty_id', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->