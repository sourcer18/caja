<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuarios', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Usuarios', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>