<?php
/* @var $this AnalistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Analistas',
);

$this->menu=array(
	array('label'=>'Create Analista', 'url'=>array('create')),
	array('label'=>'Manage Analista', 'url'=>array('admin')),
);
?>

<h1>Analistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
