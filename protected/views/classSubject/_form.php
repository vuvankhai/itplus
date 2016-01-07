<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'class-subject-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Class:',array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_Class',Classmanager::getClassOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Class',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Room:',array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_Room', Room::getRoomOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Room',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Hour:',array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_Hour', Hour::getHourOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Hour',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Subject:',array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_Subject', Subject::getSubjectOptions(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Subject',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Start_date:',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
					'booster.widgets.TbDatePicker',
					array(
			        	'model'=>$model,
			            'name' => 'ClassSubject[Start_date]',
			            'value'=>$model->Start_date,
			            'htmlOptions' => array('class'=>'form-control',),
			            'options' => array(
			            	'format'=>'yyyy-mm-dd',
			                'language' => 'vi'
			            	)
		        	)
				);
		//echo $form->textField($model,'Start_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Start_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Finish_date:',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
					'booster.widgets.TbDatePicker',
					array(
			        	'model'=>$model,
			            'name' => 'ClassSubject[Finish_date]',
			            'value'=>$model->Finish_date,
			            'htmlOptions' => array('class'=>'form-control',),
			            'options' => array(
			            	'format'=>'yyyy-mm-dd',
			                'language' => 'vi'
			            	)
		        	)
				);
		//echo $form->textField($model,'Finish_date',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Finish_date',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ID_Facuty:',array('class'=>'control-label')); ?>
		<?php echo $form->dropdownList($model,'ID_Facuty',Users::getAccountUser(),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID_Facuty',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Date_Exam:',array('class'=>'control-label')); ?>
		<?php 
			$form->widget(
					'booster.widgets.TbDatePicker',
					array(
			        	'model'=>$model,
			            'name' => 'ClassSubject[Date_Exam]',
			            'value'=>$model->Date_Exam,
			            'htmlOptions' => array('class'=>'form-control',),
			            'options' => array(
			            	'format'=>'yyyy-mm-dd',
			                'language' => 'vi'
			            	)
		        	)
				);
		//echo $form->textField($model,'Date_Exam',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Date_Exam',array('class'=>'text-danger')); ?>
	</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu',array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-primary btn-sm" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->