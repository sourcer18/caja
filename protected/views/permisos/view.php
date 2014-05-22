<?php
/* @var $this PermisosController */
/* @var $model Permisos */

$this->breadcrumbs=array(
	'Permisoses'=>array('index'),
	$model->idPermisos,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Permisos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Permisos', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Permisos', 'url'=>array('update', 'id'=>$model->idPermisos)),
	array('label'=>Yii::t('app','Delete'). ' Permisos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPermisos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Permisos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Permisos #<?php echo $model->idPermisos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPermisos',
		'nombre',
		'descripcion',
	),
)); ?>
