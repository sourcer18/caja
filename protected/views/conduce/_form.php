<?php
/* @var $this ConduceController */
/* @var $model Conduce */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conduce-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Conductor'); ?>
		<?php echo $form->dropDownList($model,'conductor_id_conductor',CHtml::listData(conductor::model()->findAll(),'nombre','nombre'),array('empty'=>'Seleccione conductor para viaje')); ?>
		<?php //echo $form->textField($model,'conductor_id_conductor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'conductor_id_conductor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Matricula'); ?>
		<?php echo $form->dropDownList($model,'autobus_id_autobus',CHtml::listData(autobus::model()->findAll(),'matricula','matricula'),array('empty'=>'Seleccione una matricula')); ?>
		<?php //echo $form->textField($model,'autobus_id_autobus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'autobus_id_autobus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero viaje'); ?>
		<?php echo $form->dropDownList($model,'viaje_id_viaje',CHtml::listData(viaje::model()->findAll(),'id_viaje','id_viaje'),array('empty'=>'Seleccione uno de los viajes')); ?>
		<?php //echo $form->textField($model,'viaje_id_viaje',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'viaje_id_viaje'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->