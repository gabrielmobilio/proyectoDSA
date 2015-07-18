<?php
/* @var $this AnalistaController */
/* @var $model Analista */

$this->breadcrumbs=array(
	'Analistas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Analista', 'url'=>array('index')),
	array('label'=>'Manage Analista', 'url'=>array('admin')),
);
?>

<h1>Create Analista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>