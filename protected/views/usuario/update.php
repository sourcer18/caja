<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Usuario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Usuario', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage'). ' Usuario', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Usuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>