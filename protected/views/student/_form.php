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
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Firstname', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Firstname',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Firstname', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Lastname', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Lastname',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Lastname', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Phonenumber', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Phonenumber', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Email', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Email', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Account', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Account', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Account', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Gender', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Gender', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Gender', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Birthday', array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
		        'booster.widgets.TbDatePicker',
		        array(
		        	'model'=>$model,
		            'name' => 'Student[Birthday]',
		            'value'=>$model->Birthday,
		            'htmlOptions' => array('class'=>'form-control',),
		            'options' => array(
		            	'format'=>'yyyy-mm-dd',
		                'language' => 'vi'
		            )
		        )
		    );
		//echo $form->textField($model,'Birthday',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Birthday', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Status', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>300, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Class', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'ID_Class', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Class', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Address', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Address', array('text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Phone_Parent', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Phone_Parent',array('size'=>12,'maxlength'=>12, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Phone_Parent', array('text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-sm btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->