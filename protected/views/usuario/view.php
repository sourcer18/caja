<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Usuario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete'). ' Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	//aqui cambio el estilo de mostrar
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'username',
		'password',
		'correo',
		'nombre',
		'apellidos',
		'espacio',
		'imagen',
	),
)); ?>
