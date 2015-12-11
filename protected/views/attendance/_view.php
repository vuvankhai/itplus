<?php
/* @var $this AttendanceController */
/* @var $data Attendance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Session')); ?>:</b>
	<?php echo CHtml::encode($data->Session); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Present')); ?>:</b>
	<?php echo CHtml::encode($data->Present); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Absent')); ?>:</b>
	<?php echo CHtml::encode($data->Absent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Teacher')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Teacher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_create')); ?>:</b>
	<?php echo CHtml::encode($data->Date_create); ?>
	<br />


</div>