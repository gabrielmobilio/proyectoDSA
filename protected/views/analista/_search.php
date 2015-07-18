<?php
/* @var $this AnalistaController */
/* @var $model Analista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contrasena'); ?>
		<?php echo $form->textField($model,'Contrasena',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rol'); ?>
		<?php echo $form->textField($model,'Rol',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->