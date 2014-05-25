<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->idUsuarios,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuarios', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Usuarios', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Usuarios', 'url'=>array('update', 'id'=>$model->idUsuarios)),
	array('label'=>Yii::t('app','Delete'). ' Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUsuarios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Usuarios', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Usuarios #<?php echo $model->idUsuarios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUsuarios',
		'login',
		'pass',
		'correo',
		'nombre',
		'apellidos',
	),
)); ?>
