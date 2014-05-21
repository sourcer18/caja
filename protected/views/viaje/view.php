<?php
/* @var $this ViajeController */
/* @var $model Viaje */

$this->breadcrumbs=array(
	'Viajes'=>array('index'),
	$model->id_viaje,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Viaje', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Viaje', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Viaje', 'url'=>array('update', 'id'=>$model->id_viaje)),
	array('label'=>Yii::t('app','Delete'). ' Viaje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_viaje),'confirm'=>'¿Seguro que quieres borrarlo?')),
	array('label'=>Yii::t('app','Manage'). ' Viaje', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Viaje #<?php echo $model->id_viaje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_viaje',
		'autobus_id_autobus',
		'fecha',
		'hora',
		'destino',
		'precio',
	),
)); ?>
