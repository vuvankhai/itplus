<?php
/* @var $this ClassmanagerController */
/* @var $data Classmanager */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code')); ?>:</b>
	<?php echo CHtml::encode($data->Code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Code_ITI')); ?>:</b>
	<?php echo CHtml::encode($data->Code_ITI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Start_date')); ?>:</b>
	<?php echo CHtml::encode($data->Start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Finish_date')); ?>:</b>
	<?php echo CHtml::encode($data->Finish_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Numberofstudent')); ?>:</b>
	<?php echo CHtml::encode($data->Numberofstudent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_course')); ?>:</b>
	<?php echo CHtml::encode($data->ID_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facuty_id')); ?>:</b>
	<?php echo CHtml::encode($data->Facuty_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	*/ ?>

</div>