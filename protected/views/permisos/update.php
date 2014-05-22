<?php
/* @var $this PermisosController */
/* @var $model Permisos */

$this->breadcrumbs=array(
	'Permisoses'=>array('index'),
	$model->idPermisos=>array('view','id'=>$model->idPermisos),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Permisos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Permisos', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Permisos', 'url'=>array('view', 'id'=>$model->idPermisos)),
	array('label'=>Yii::t('app','Manage'). ' Permisos', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Permisos <?php echo $model->idPermisos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>