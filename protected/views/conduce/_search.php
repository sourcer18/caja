<?php
/* @var $this ConduceController */
/* @var $model Conduce */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_conduce'); ?>
		<?php echo $form->textField($model,'id_conduce',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conductor_id_conductor'); ?>
		<?php echo $form->textField($model,'conductor_id_conductor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autobus_id_autobus'); ?>
		<?php echo $form->textField($model,'autobus_id_autobus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viaje_id_viaje'); ?>
		<?php echo $form->textField($model,'viaje_id_viaje',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->