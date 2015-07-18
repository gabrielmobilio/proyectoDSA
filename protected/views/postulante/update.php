<?php
/* @var $this PostulanteController */
/* @var $model Postulante */

$this->breadcrumbs=array(
	'Postulantes'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postulante', 'url'=>array('index')),
	array('label'=>'Create Postulante', 'url'=>array('create')),
	array('label'=>'View Postulante', 'url'=>array('view', 'id'=>$model->Cedula)),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>Update Postulante <?php echo $model->Cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>