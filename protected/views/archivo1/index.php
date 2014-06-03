<?php
/* @var $this Archivo1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Archivo1s',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Archivo1', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Archivo1', 'url'=>array('admin')),
);
?>

<h1>Archivo1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
