<?php
/* @var $this ConduceController */
/* @var $data Conduce */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id conduce')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_conduce), array('view', 'id'=>$data->id_conduce)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Identificacion Conductor')); ?>:</b>
	<?php echo CHtml::encode($data->conductor_id_conductor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Identificacion Matricula')); ?>:</b>
	<?php echo CHtml::encode($data->autobus_id_autobus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero de viaje')); ?>:</b>
	<?php echo CHtml::encode($data->viaje_id_viaje); ?>
	<br />


</div>