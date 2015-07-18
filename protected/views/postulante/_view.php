<?php
/* @var $this PostulanteController */
/* @var $data Postulante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cedula), array('view', 'id'=>$data->Cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->Contrasena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstado')); ?>:</b>
	<?php echo CHtml::encode($data->idEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::encode($data->Rol); ?>
	<br />


</div>