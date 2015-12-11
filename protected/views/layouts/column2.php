<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
</div><!-- sidebar -->

<div id="main-content">
	<div class="container-fluid">
		<?php echo $content; ?>
	</div><!-- container-fluid -->
</div>

<?php $this->endContent(); ?>