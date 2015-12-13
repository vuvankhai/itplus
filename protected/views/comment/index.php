<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Manage Comment', 'url'=>array('index')),
);
?>

<h1 class="text-success">Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
