<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->idUsuarios=>array('view','id'=>$model->idUsuarios),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuarios', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Usuarios', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Usuarios', 'url'=>array('view', 'id'=>$model->idUsuarios)),
	array('label'=>Yii::t('app','Manage'). ' Usuarios', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Usuarios <?php echo $model->idUsuarios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>