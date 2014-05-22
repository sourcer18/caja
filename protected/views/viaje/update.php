<?php
/* @var $this ViajeController */
/* @var $model Viaje */

$this->breadcrumbs=array(
	'Viajes'=>array('index'),
	$model->id_viaje=>array('view','id'=>$model->id_viaje),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Viaje', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Viaje', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Viaje', 'url'=>array('view', 'id'=>$model->id_viaje)),
	array('label'=>Yii::t('app','Manage'). ' Viaje', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Viaje <?php echo $model->id_viaje; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>