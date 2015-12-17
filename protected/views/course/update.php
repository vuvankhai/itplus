<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('admin')),
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'View Course', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Course', 'url'=>array('index')),
);
?>

<h1 class="text-success title">Update Course <?php echo $model->ID; ?></h1>

<?php $type = 'create'; ?>
<?php $this->renderPartial('_form', array('model'=>$model, 'type'=>$type)); ?>