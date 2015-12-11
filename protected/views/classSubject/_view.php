<?php
/* @var $this ClassSubjectController */
/* @var $data ClassSubject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Class')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Room')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Room); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Hour')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Subject')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Start_date')); ?>:</b>
	<?php echo CHtml::encode($data->Start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Finish_date')); ?>:</b>
	<?php echo CHtml::encode($data->Finish_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Facuty')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Facuty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Exam')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Exam); ?>
	<br />

	*/ ?>

</div>