<?php
/* @var $this SemesterSubjectController */
/* @var $data SemesterSubject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Semester')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Semester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Subject')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hour')); ?>:</b>
	<?php echo CHtml::encode($data->Hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>