<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Fields with <span class="required">*</span> are required.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Username', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Username',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Username', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Password', array('class'=>'control-label')); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Password', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Type',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_GroupAcc', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_GroupAcc', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_GroupAcc', array('class'=>'text-danger')); ?>
	</div>
        
        
        <div class="form-group">
		<?php echo $form->labelEx($users,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Name',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Name', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Phonenumber', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Phonenumber',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Phonenumber', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Email', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Email', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Address', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Address',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Address', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Description', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Avatar', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Avatar',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Avatar', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($users,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($users,'Status',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($users,'Status', array('class'=>'text-danger')); ?>
	</div>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->