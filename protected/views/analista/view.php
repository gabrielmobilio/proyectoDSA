<?php
/* @var $this AnalistaController */
/* @var $model Analista */

$this->breadcrumbs=array(
	'Analistas'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Analista', 'url'=>array('index')),
	array('label'=>'Create Analista', 'url'=>array('create')),
	array('label'=>'Update Analista', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Analista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Analista', 'url'=>array('admin')),
);
?>

<h1>View Analista #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cedula',
		'Contrasena',
		'Rol',
		'Nombre',
		'Apellido',
	),
)); ?>
