<?php
/* @var $this PermisosController */
/* @var $data Permisos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPermisos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPermisos), array('view', 'id'=>$data->idPermisos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>