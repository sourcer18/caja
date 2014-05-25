<?php
/* @var $this ConduceController */
/* @var $model Conduce */

$this->breadcrumbs=array(
	'Conduces'=>array('index'),
	$model->id_conduce,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conduce', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Conduce', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Conduce', 'url'=>array('update', 'id'=>$model->id_conduce)),
	array('label'=>Yii::t('app','Delete'). ' Conduce', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_conduce),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Conduce', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Conduce #<?php echo $model->id_conduce; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_conduce',
		'conductor_id_conductor',
		'autobus_id_autobus',
		'viaje_id_viaje',
	),
)); ?>
