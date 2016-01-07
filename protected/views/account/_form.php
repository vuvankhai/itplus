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
	'htmlOptions'=>array('class'=>'form', 'enctype' => 'multipart/form-data'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Username:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Username',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Username', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Password:', array('class'=>'control-label')); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Password', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Type:', array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Type', Domain::getAccountTypeOptions(), array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Type', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status:', array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Status',Domain::getAccountStatusOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_GroupAcc:', array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_GroupAcc', Groupaccount::getGroupAccountOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_GroupAcc', array('class'=>'text-danger')); ?>
	</div>
        
        
        <div class="form-group">
		<?php echo $form->labelEx($user,'Name:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($user,'Name',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Name', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Phonenumber:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($user,'Phonenumber',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Phonenumber', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Email:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($user,'Email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Email', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Address:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($user,'Address',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Address', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Avatar:', array('class'=>'control-label')); ?>
		<?php echo $form->fileField($user,'Avatar',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Avatar', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Status:', array('class'=>'control-label')); ?>
		<?php echo $form->textField($user,'Status',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Status', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'Description:', array('class'=>'control-label')); ?>
		<?php echo $form->textArea($user,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($user,'Description', array('class'=>'text-danger')); ?>
	</div>
        
	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->