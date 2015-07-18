<?php
/* @var $this PostulanteController */
/* @var $model Postulante */

$this->breadcrumbs=array(
	'Postulantes'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Postulante', 'url'=>array('index')),
	array('label'=>'Create Postulante', 'url'=>array('create')),
	array('label'=>'Update Postulante', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Postulante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>View Postulante #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombre',
		'Apellido',
		'Contrasena',
		'Cedula',
		'idEstado',
		'Rol',
	),
)); ?>
