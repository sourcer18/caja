<?php
/* @var $this ConduceController */
/* @var $model Conduce */

$this->breadcrumbs=array(
	'Conduces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conduce', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage'). ' Conduce', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create');?> Conduce</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>