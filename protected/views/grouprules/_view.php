<?php
/* @var $this GrouprulesController */
/* @var $data Grouprules */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_GroupAcc')); ?>:</b>
	<?php echo CHtml::encode($data->ID_GroupAcc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_menu')); ?>:</b>
	<?php echo CHtml::encode($data->ID_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />


</div>