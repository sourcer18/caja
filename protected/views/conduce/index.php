<?php
/* @var $this ConduceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conduces',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Conduce', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Conduce', 'url'=>array('admin')),
);
?>

<h1>Conduces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
