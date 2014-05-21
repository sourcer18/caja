<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Archivo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Archivo', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Archivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>