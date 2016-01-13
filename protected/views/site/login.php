<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="text-danger pd-3-10">Fields with <span class="required">*</span> are required.</p>

	<div class="from-group">
		<?php echo $form->labelEx($model,'username', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username', array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password', array('class'=>'text-danger')); ?>
	</div>

<!--	<div class="form-group rememberMe">
		<?php //echo $form->checkBox($model,'rememberMe'); ?>
		<?php //echo $form->label($model,'rememberMe'); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
