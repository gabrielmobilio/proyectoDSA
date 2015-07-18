<?php
/* @var $this PostulanteController */
/* @var $model Postulante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'postulante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contrasena'); ?>
		<?php echo $form->textField($model,'Contrasena',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idEstado'); ?>
		<?php echo $form->textField($model,'idEstado'); ?>
		<?php echo $form->error($model,'idEstado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rol'); ?>
		<?php echo $form->textField($model,'Rol',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->