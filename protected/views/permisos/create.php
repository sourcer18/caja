<?php
/* @var $this PermisosController */
/* @var $model Permisos */

$this->breadcrumbs=array(
	'Permisoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Permisos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Permisos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Permisos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>