<?php
/* @var $this ViajeController */
/* @var $model Viaje */

$this->breadcrumbs=array(
	'Viajes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Viaje', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Viaje', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Viaje</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>