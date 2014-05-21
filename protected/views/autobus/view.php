<?php
/* @var $this AutobusController */
/* @var $model Autobus */

$this->breadcrumbs=array(
	'Autobuses'=>array('index'),
	$model->id_autobus,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Autobus', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Autobus', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Autobus', 'url'=>array('update', 'id'=>$model->id_autobus)),
	array('label'=>Yii::t('app','Delete'). ' Autobus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_autobus),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Autobus', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Autobus #<?php echo $model->id_autobus; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_autobus',
		'matricula',
		'marca',
		'numero_pasajeros',
	),
)); ?>
