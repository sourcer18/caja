<?php
/* @var $this AutobusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autobuses',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Autobus', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Autobus', 'url'=>array('admin')),
);
?>

<h1>Autobuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
