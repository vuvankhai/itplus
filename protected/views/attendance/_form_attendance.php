<?php
/* @var $this AttendanceController */
/* @var $model Attendance */
/* @var $form CActiveForm */
?>

<div class="form-get-class">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attendance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('class'=>'form'),
)); ?>
    <div class="form-get-value">
	<div class="form-group col-sm-3">
		<?php echo $form->labelEx($model,'Select_class',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Select_class', $model->getClassOptionsByFacutyId(1),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Select_class',array('class'=>'text-danger')); ?>
	</div>
	<div class="form-group col-sm-3">
		<?php echo $form->labelEx($model,'Select_subject',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Select_subject', array(0=>'Chọn Lớp học trước'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Select_subject',array('class'=>'text-danger')); ?>
	</div>
	<div class="form-group col-sm-3">
		<?php echo $form->labelEx($model,'Select_session',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'Select_session', array(0=>'Chọn Môn học trước'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Select_session',array('class'=>'text-danger')); ?>
	</div>
    </div>
    <div id="table-attendance">
        <table id="tbl-attendance" class="table table-bordered">
            <thead>
                <tr>
                    <th class="no">STT</th>
                    <th class="code">Mã học viên</th>
                    <th class="last-name">Họ</th>
                    <th class="first-name">Tên</th>
                    <th class="status">Đi học</th>
                    <th class="status">Nghỉ học</th>
                    <th class="status">Nghỉ có phép</th>
                    <th class="note">Ghi chú</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">Chọn session để lấy thông tin điểm danh</td>
                </tr>
            </tbody>
        </table>
    </div>
	<div class="form-group buttons fright">
            <?php echo CHtml::ajaxSubmitButton('Lưu', 'attendance/ajaxsave', array('update'=>'#table-attendance'), array('class'=>'btn btn-sm btn-success floppy-disk')) ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->