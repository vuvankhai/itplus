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
		<?php echo $form->dropDownList($model,'ID', $model->getClassOptionsByFacutyId(Yii::app()->user->idUser),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID',array('class'=>'text-danger')); ?>
	</div>
	<div class="form-group col-sm-3">
		<?php echo $form->labelEx($model,'Select_subject',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'ID', array(0=>'Chọn Lớp học trước'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID',array('class'=>'text-danger')); ?>
	</div>
	<div class="form-group col-sm-3">
		<?php echo $form->labelEx($model,'Select_session',array('class'=>'control-label')); ?>
		<?php echo $form->dropDownList($model,'ID', array(0=>'Chọn Môn học trước'),array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'ID',array('class'=>'text-danger')); ?>
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
                    <td class="no">1</td>
                    <td class="code">LT0914B</td>
                    <td class="last-name">Nguyễn Xuân</td>
                    <td class="first-name">Thủy</td>
                    <td class="status"><input type="radio" name="Thuy"/></td>
                    <td class="status"><input type="radio" name="Thuy"/></td>
                    <td class="status"><input type="radio" name="Thuy"/></td>
                    <td class="note"><textarea></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
	<div class="form-group buttons fright">
            <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-floppy-disk"></i></button>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->