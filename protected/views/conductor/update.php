<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	$model->id_conductor=>array('view','id'=>$model->id_conductor),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conductor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Conductor', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Conductor', 'url'=>array('view', 'id'=>$model->id_conductor)),
	array('label'=>Yii::t('app','Manage'). ' Conductor', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Conductor <?php echo $model->id_conductor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>