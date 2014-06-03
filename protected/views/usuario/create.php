<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>