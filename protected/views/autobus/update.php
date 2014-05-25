<?php
/* @var $this AutobusController */
/* @var $model Autobus */

$this->breadcrumbs=array(
	'Autobuses'=>array('index'),
	$model->id_autobus=>array('view','id'=>$model->id_autobus),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Autobus', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Autobus', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Autobus', 'url'=>array('view', 'id'=>$model->id_autobus)),
	array('label'=>Yii::t('app','Manage'). ' Autobus', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Autobus <?php echo $model->id_autobus; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>