<?php
/* @var $this Archivo1Controller */
/* @var $model Archivo1 */

$this->breadcrumbs=array(
	'Archivo1s'=>array('index'),
	$model->idArchivo,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Archivo1', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Archivo1', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Archivo1', 'url'=>array('update', 'id'=>$model->idArchivo)),
	array('label'=>Yii::t('app','Delete'). ' Archivo1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idArchivo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Archivo1', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Archivo1 #<?php echo $model->idArchivo; ?></h1>

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
	),
)); ?>
