<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->idArchivo,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Archivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Archivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Archivo', 'url'=>array('update', 'id'=>$model->idArchivo)),
	array('label'=>Yii::t('app','Delete'). ' Archivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idArchivo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Archivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Archivo #<?php echo $model->idArchivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idArchivo',
		'nombre',
		'descripcion',
		'tamanio',
		'tipo',
		'url',
		'extension',
		'iPadre',
		'idPropietario',
		'idPermiso',
	),
)); ?>
