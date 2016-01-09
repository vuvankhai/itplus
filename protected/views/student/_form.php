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
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form'),
)); ?>

	<p class="text-danger note-required">Fields with <span class="required">*</span> are required.</p>
        
        <div class="form-group">
            <div class="col-3 fleft">
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
            <div class="col-9 fright">
                <div class="col-6 fleft">
                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Firstname',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Firstname',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Firstname',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Lastname',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Lastname',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Lastname',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Phonenumber',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Phonenumber',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Phonenumber',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Email',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Email',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Gender',array('class'=>'control-label')); ?>
                            <?php echo $form->dropDownList($model,'Gender',array(0=>'Nam', 1=>'Nữ'),array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Gender',array('class'=>'text-danger')); ?>
                    </div>
                    
                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Birthday',array('class'=>'control-label')); ?>
                            <?php 
                                $form->widget(
                                    'booster.widgets.TbDatePicker',
                                    array(
                                            'model'=>$model,
                                        'name' => 'Student[Birthday]',
                                        'value'=>$model->Birthday,
                                        'htmlOptions' => array('class'=>'form-control', 'readOnly'=>'readOnly'),
                                        'options' => array(
                                            'format'=>'yyyy-mm-dd',
                                            'language' => 'vi'
                                        )
                                    )
                                );
                                //echo $form->textField($model,'Birthday',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Birthday',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Status',array('class'=>'control-label')); ?>
                            <?php echo $form->dropDownList($model,'Status', Domain::getStudentStatusOptions(),array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Status',array('class'=>'text-danger')); ?>
                    </div>
                </div>
                <div class="col-6 fright">

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Address',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Address',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Phone_Parent',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Phone_Parent',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Phone_Parent',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Parent_Name',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Parent_Name',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Parent_Name',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Date_learning',array('class'=>'control-label')); ?>
                            <?php
                                $form->widget(
                                    'booster.widgets.TbDatePicker',
                                    array(
                                            'model'=>$model,
                                        'name' => 'Student[Date_learning]',
                                        'value'=>$model->Date_learning,
                                        'htmlOptions' => array('class'=>'form-control', 'readOnly'=>'readOnly'),
                                        'options' => array(
                                            'format'=>'yyyy-mm-dd',
                                            'language' => 'vi'
                                        )
                                    )
                                ); 
                                //echo $form->textField($model,'Date_learning',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Date_learning',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Code',array('class'=>'control-label')); ?>
                            <?php echo $form->textField($model,'Code',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Code',array('class'=>'text-danger')); ?>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model,'Description',array('class'=>'control-label')); ?>
                            <?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>300,'class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Description',array('class'=>'text-danger')); ?>
                    </div>
                </div>
            </div>
            

        </div>
            
	<div class="form-group buttons fright">
		<?php echo CHtml::ajaxsubmitButton('Lưu', '', array('update'=>'#dialog-content'), array('class'=>'btn btn-success btn-sm floppy-disk')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->