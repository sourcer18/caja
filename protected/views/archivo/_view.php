<?php
/* @var $this ArchivoController */
/* @var $data Archivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idArchivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idArchivo), array('view', 'id'=>$data->idArchivo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamanio')); ?>:</b>
	<?php echo CHtml::encode($data->tamanio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('iPadre')); ?>:</b>
	<?php echo CHtml::encode($data->iPadre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPropietario')); ?>:</b>
	<?php echo CHtml::encode($data->idPropietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPermiso')); ?>:</b>
	<?php echo CHtml::encode($data->idPermiso); ?>
	<br />

	*/ ?>

</div>