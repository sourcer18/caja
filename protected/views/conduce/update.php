<?php
/* @var $this ConduceController */
/* @var $model Conduce */

$this->breadcrumbs=array(
	'Conduces'=>array('index'),
	$model->id_conduce=>array('view','id'=>$model->id_conduce),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conduce', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Conduce', 'url'=>array('create')),
	array('label'=>Yii::t('app','View'). ' Conduce', 'url'=>array('view', 'id'=>$model->id_conduce)),
	array('label'=>Yii::t('app','Manage'). ' Conduce', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?> Conduce <?php echo $model->id_conduce; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>