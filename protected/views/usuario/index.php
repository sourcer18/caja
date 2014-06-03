<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */
//lo utilza el main del layout
$this->breadcrumbs=array(
	'Usuarios',
);
//lo utiliza el layout column 2
$this->menu=array(
	array('label'=>Yii::t('app','Create'). ' Usuario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage'). ' Usuario', 'url'=>array('admin')),
);
?>

<h1>Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//paginacion tema boostrap
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))

)); ?>
