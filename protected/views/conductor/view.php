<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	$model->id_conductor,
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conductor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Conductor', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update'). ' Conductor', 'url'=>array('update', 'id'=>$model->id_conductor)),
	array('label'=>Yii::t('app','Delete'). ' Conductor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_conductor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage'). ' Conductor', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View');?> Conductor #<?php echo $model->id_conductor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_conductor',
		'DNI',
		'nombre',
		'apellidos',
	),
)); ?>
