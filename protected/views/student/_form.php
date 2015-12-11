<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Firstname'); ?>
		<?php echo $form->textField($model,'Firstname',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lastname'); ?>
		<?php echo $form->textField($model,'Lastname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phonenumber'); ?>
		<?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Phonenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Account'); ?>
		<?php echo $form->textField($model,'ID_Account'); ?>
		<?php echo $form->error($model,'ID_Account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->textField($model,'Gender'); ?>
		<?php echo $form->error($model,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Birthday'); ?>
		<?php echo $form->textField($model,'Birthday',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Class'); ?>
		<?php echo $form->textField($model,'ID_Class'); ?>
		<?php echo $form->error($model,'ID_Class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone_Parent'); ?>
		<?php echo $form->textField($model,'Phone_Parent',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'Phone_Parent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->