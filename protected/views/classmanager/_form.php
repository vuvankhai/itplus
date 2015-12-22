<?php
/* @var $this ClassmanagerController */
/* @var $model Classmanager */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classmanager-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-info bg-info pd-3-15">Trường có dấu <span class="required">*</span> là bắt buộc.</p>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'Name',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Description',array('class'=>'control-label')); ?>
		<?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Description',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Code',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Code',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Code_ITI',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Code_ITI',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Code_ITI',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Start_date',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
		        'booster.widgets.TbDatePicker',
		        array(
		        	'model'=>$model,
		            'name' => 'Classmanager[Start_date]',
		            'value'=>$model->Start_date,
		            'htmlOptions' => array('class'=>'form-control',),
		            'options' => array(
		            	'format'=>'yyyy-mm-dd',
		                'language' => 'vi'
		            )
		        )
		    );
		    //$form->dateField($model,'Start_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Start_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Finish_date',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
		        'booster.widgets.TbDatePicker',
		        array(
		        	'model'=>$model,
		            'name' => 'Classmanager[Finish_date]',
		            'value'=>$model->Finish_date,
		            'htmlOptions' => array('class'=>'form-control',),
		            'options' => array(
		            	'format'=>'yyyy-mm-dd',
		                'language' => 'vi'
		            )
		        )
		    );//echo $form->dateField($model,'Finish_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Finish_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Numberofstudent',array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Numberofstudent',array('class'=>'form-control', 'onKeyPress'=>'return isNumberKey(event)')); ?>
		<?php echo $form->error($model,'Numberofstudent',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_course',array('class'=>'control-label')); ?>
		<?php 
			if(Yii::app()->controller->action->id =='create')
				echo $form->textField($model,'ID_course',array('class'=>'form-control')); 
			else if(Yii::app()->controller->action->id =='update')
				echo $form->dropDownList($model, 'ID_course', Course::getCourseOptions() ,array('class'=>'form-control'));
		?>
		<?php echo $form->error($model,'ID_course',array('class'=>'text-danger')); ?>
	</div>
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'Facuty_id',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Facuty_id', Users::getAccountUser(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Facuty_id',array('class'=>'text-danger')); ?>
	</div>
	
    
        <div class="form-group">
		<?php echo $form->labelEx($model,'Status',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model, 'Status',array('1'=>'Bắt đầu','2'=>'Kết thúc'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Status',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->