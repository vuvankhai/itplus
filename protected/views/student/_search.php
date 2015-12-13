<?php
/* @var $this StudentController */
/* @var $model Student */
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
		<?php echo $form->textField($model,'ID',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Firstname', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Firstname',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Lastname', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Lastname',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Phonenumber', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Email', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Account', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Account',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Gender', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Gender',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Birthday', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Birthday',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ID_Class', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Class',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Address', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Phone_Parent', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Phone_Parent',array('size'=>12,'maxlength'=>12, 'class'=>'form-control')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->