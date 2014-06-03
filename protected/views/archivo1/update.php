<?php
/* @var $this Archivo1Controller */
/* @var $model Archivo1 */

$this->breadcrumbs=array(
	'Archivo1s'=>array('index'),
	$model->idArchivo=>array('view','id'=>$model->idArchivo),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Archivo1', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Archivo1', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Archivo1', 'url'=>array('view', 'id'=>$model->idArchivo)),
	array('label'=>Yii::t('app','Manage'). ' Archivo1', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Archivo1 <?php echo $model->idArchivo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>