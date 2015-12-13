<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('admin')),
	array('label'=>'Manage Post', 'url'=>array('index')),
);
?>

<h1 class="text-success">Create Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>