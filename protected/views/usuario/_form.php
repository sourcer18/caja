<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Registrar Usuario</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Salir"><i class="fa fa-times"></i></button>
                </div>
			</div>
			<div class="box-body">	
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'usuario-form',
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
					// See class documentation of CActiveForm for details on this.
					'enableAjaxValidation'=>false,
				)); ?>

					<p class="note">Los campos que lleven <span class="required">*</span> son obligatorios.</p>

					<?php echo $form->errorSummary($model); ?>

					<div>
						<?php echo $form->labelEx($model,'username'); ?>
						<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>222)); ?>
						<?php echo $form->error($model,'username'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'password'); ?>
						<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>222)); ?>
						<?php echo $form->error($model,'password'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'correo'); ?>
						<?php echo $form->textField($model,'correo',array('size'=>40,'maxlength'=>40)); ?>
						<?php echo $form->error($model,'correo'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'nombre'); ?>
						<?php echo $form->textField($model,'nombre',array('size'=>10,'maxlength'=>10)); ?>
						<?php echo $form->error($model,'nombre'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'apellidos'); ?>
						<?php echo $form->textField($model,'apellidos',array('size'=>10,'maxlength'=>10)); ?>
						<?php echo $form->error($model,'apellidos'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'espacio'); ?>
						<?php echo $form->textField($model,'espacio'); ?>
						<?php echo $form->error($model,'espacio'); ?>
					</div>

					<div>
						<?php echo $form->labelEx($model,'imagen'); ?>
						<?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
						<?php echo $form->error($model,'imagen'); ?>
					</div>

					<div class="buttons">
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
					</div>

				<?php $this->endWidget(); ?>
			</div>	
		</div>	
	</div>	
</div><!-- form -->