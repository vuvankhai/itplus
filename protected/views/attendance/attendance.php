<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Manage',
);

?>
<div class="head">
<h1 class="text-success title">Điểm danh</h1>
<?php 
    Yii::app()->clientScript->registerScript("Get-Attendance","
            $('#Attendance_Select_class').change(function(){
                var c_id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '".Yii::app()->createUrl('attendance/getsubjectoptions')."',
                    data: {id: c_id},
                    success: function(data){
                        $('#Attendance_Select_subject').html(data);
                    }
                })
            }); 
            $('#Attendance_Select_subject').change(function(){
                var s_id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '".Yii::app()->createUrl('attendance/getsessionoptions')."',
                    data: {id: s_id},
                    success: function(data){
                        $('#Attendance_Select_session').html(data);
                    }
                })
            });
            $('#Attendance_Select_session').change(function(){
                var s_id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '".Yii::app()->createUrl('attendance/getstudentattendance')."',
                    data: {id: s_id},
                    success: function(data){
                        var check = data.indexOf('>x<');
                        if(data == 'false'){
                            $('#table-attendance').html('Chưa chọn session');
                            $('.buttons').addClass('hide');
                        } else {
                            $('#table-attendance').html(data);
                            if(check != -1){
                                $('.buttons').addClass('hide');
                            }else {
                                $('.buttons').removeClass('hide');
                            }
                        }
                    }
                })
            });          
        ");

?>
</div>
<div class="body">
<?php $this->renderPartial('_form_attendance', array('classmanager'=>$classmanager,'model'=>$model)); ?>
</div>