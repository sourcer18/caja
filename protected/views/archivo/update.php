<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->idArchivo=>array('view','id'=>$model->idArchivo),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Archivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Archivo', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Archivo', 'url'=>array('view', 'id'=>$model->idArchivo)),
	array('label'=>Yii::t('app','Manage'). ' Archivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Archivo <?php echo $model->idArchivo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>