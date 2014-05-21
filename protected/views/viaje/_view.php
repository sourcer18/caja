<?php
/* @var $this ViajeController */
/* @var $data Viaje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero de Viaje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_viaje), array('view', 'id'=>$data->id_viaje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Matricula')); ?>:</b>
	<?php echo CHtml::encode($data->autobus->matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destino')); ?>:</b>
	<?php echo CHtml::encode($data->destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>