<?php
/* @var $this AutobusController */
/* @var $data Autobus */
?>

<div class="view">

	<?php /*<b><?php echo CHtml::encode($data->getAttributeLabel('id_autobus')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_autobus), array('view', 'id'=>$data->id_autobus)); ?>
	<br />
	*/?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matricula), array('view', 'id'=>$data->id_autobus)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_pasajeros')); ?>:</b>
	<?php echo CHtml::encode($data->numero_pasajeros); ?>
	<br />


</div>