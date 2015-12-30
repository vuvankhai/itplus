<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div id="main-content">

<?php 

//	$this->beginWidget('zii.widgets.CPortlet');
//	$this->widget('zii.widgets.CMenu', array(
//		'items'=>$this->menu,
//		'htmlOptions'=>array('class'=>'operations'),
//	));
//	$this->endWidget();

?>

	<?php echo $content; ?>
</div>
<?php $this->endContent(); ?>