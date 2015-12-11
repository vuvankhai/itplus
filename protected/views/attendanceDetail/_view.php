<?php
/* @var $this AttendanceDetailController */
/* @var $data AttendanceDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Attendance')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Attendance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Student')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Student); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />


</div>