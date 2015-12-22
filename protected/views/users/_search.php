<?php
/* @var $this UsersController */
/* @var $model Users */
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
		<?php echo $form->label($model,'ID_Account',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Account',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Name',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Phonenumber',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Email',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Address',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Description',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Avatar',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Avatar',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Status',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Tìm kiếm',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->