<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
?>

<div class="row">
	<div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listado Usuarios</h3>
            </div>
        <div class="box-body table-responsive no-padding">
        	<table class="table table-hover">    
        		<!--<tr>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('username')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('password')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?></th>
        			<th><?php echo CHtml::encode($data->getAttributeLabel('espacio')); ?></th>
        			<th>
				</tr>-->
				<tr>
        			<th>ID</th>
        			<th>Nombre</th>
        			<th>Contraseña</th>
        			<th>Correo</th>
        			<th>Nombre</th>
        			<th>Apellidos</th>
        			<th>Espacio</th>
        			<th>
				</tr>
				<tr>		
					<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
					<td><?php echo CHtml::encode($data->username); ?></td>
					<td><?php echo CHtml::encode($data->password); ?></td>
					<td><?php echo CHtml::encode($data->correo); ?></td>
					<td><?php echo CHtml::encode($data->nombre); ?></td>
					<td><?php echo CHtml::encode($data->apellidos); ?></td>
					<td>
						<div class="progress xs progress-striped active">
	                        <div class="progress-bar progress-bar-primary" style="width: <?php echo CHtml::encode($data->espacio); ?>%"></div>
	                    </div>
	                </td>    
				</tr>
			</table>
		</div>		
	</div>	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	*/ ?>

</div>