<?php
/* @var $this AutobusController */
/* @var $model Autobus */

$this->breadcrumbs=array(
	'Autobuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Autobus', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Autobus', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Autobus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>