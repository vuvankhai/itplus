<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_post')); ?>:</b>
	<?php echo CHtml::encode($data->ID_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_comment')); ?>:</b>
	<?php echo CHtml::encode($data->Date_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Student')); ?>:</b>
	<?php echo CHtml::encode($data->Student); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Content')); ?>:</b>
	<?php echo CHtml::encode($data->Content); ?>
	<br />


</div>