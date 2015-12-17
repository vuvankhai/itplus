<?php
/* @var $this ClassSubjectController */
/* @var $model ClassSubject */

$this->breadcrumbs=array(
	'Class Subjects'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClassSubject', 'url'=>array('index')),
	array('label'=>'Create ClassSubject', 'url'=>array('create')),
	array('label'=>'View ClassSubject', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage ClassSubject', 'url'=>array('admin')),
);
?>

<h1 class="text-success title">Update ClassSubject <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>