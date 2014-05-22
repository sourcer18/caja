<?php
/* @var $this ViajeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Viajes',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Viaje', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Viaje', 'url'=>array('admin')),
);
?>

<h1>Viajes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
