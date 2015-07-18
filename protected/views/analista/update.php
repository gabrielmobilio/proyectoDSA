<?php
/* @var $this AnalistaController */
/* @var $model Analista */

$this->breadcrumbs=array(
	'Analistas'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Analista', 'url'=>array('index')),
	array('label'=>'Create Analista', 'url'=>array('create')),
	array('label'=>'View Analista', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Analista', 'url'=>array('admin')),
);
?>

<h1>Update Analista <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>