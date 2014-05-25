<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conductor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Conductor', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Conductor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>