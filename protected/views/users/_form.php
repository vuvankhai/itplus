<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form', 'enctype' => 'multipart/form-data'),
)); ?>

	<p class="text-danger note-required">Trường có dấu <span class="required">*</span> là bắt buộc.</p>
        <div class="form-group">
        <div class="col-6 fleft">
            <div class="form-group">
		<?php echo $form->labelEx($account,'Username', array('class'=>'control-label')); ?>
		<?php echo $form->textField($account,'Username',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
		<?php echo $form->error($account,'Username', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($account,'Password', array('class'=>'control-label')); ?>
                    <?php echo $form->passwordField($account,'Password',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                    <?php echo $form->error($account,'Password', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($account,'Type', array('class'=>'control-label')); ?>
                    <?php echo $form->dropDownList($account,'Type', Domain::getAccountTypeOptions(), array('class'=>'form-control')); ?>
                    <?php echo $form->error($account,'Type', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($account,'Status', array('class'=>'control-label')); ?>
                    <?php echo $form->dropDownList($account,'Status',Domain::getAccountStatusOptions(),array('class'=>'form-control')); ?>
                    <?php echo $form->error($account,'Status', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($account,'ID_GroupAcc', array('class'=>'control-label')); ?>
                    <?php echo $form->dropdownList($account,'ID_GroupAcc', Groupaccount::getGroupAccountOptions(),array('class'=>'form-control')); ?>
                    <?php echo $form->error($account,'ID_GroupAcc', array('class'=>'text-danger')); ?>
            </div>
        </div>
            
        <div class="col-6 fright">

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Name', array('class'=>'control-label')); ?>
                    <?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Name', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Phonenumber', array('class'=>'control-label')); ?>
                    <?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Phonenumber', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Email', array('class'=>'control-label')); ?>
                    <?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Email', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Address', array('class'=>'control-label')); ?>
                    <?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Address', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Avatar', array('class'=>'control-label')); ?>
                    <?php echo $form->fileField($model,'Avatar',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Avatar', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Status', array('class'=>'control-label')); ?>
                    <?php echo $form->textField($model,'Status',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Status', array('class'=>'text-danger')); ?>
            </div>

            <div class="form-group">
                    <?php echo $form->labelEx($model,'Description', array('class'=>'control-label')); ?>
                    <?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'Description', array('class'=>'text-danger')); ?>
            </div>
        </div>
        
</div>

	<div class="form-group buttons fright">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Lưu', array('class'=>'btn btn-success btn-sm')); ?>
            <button class="btn btn-sm btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>Lưu</button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->