<?php
/* @var $this ViajeController */
/* @var $model Viaje */

$this->breadcrumbs=array(
	'Viajes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Viaje', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Viaje', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#viaje-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Viajes</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo debe hacerse la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'viaje-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_viaje',
		'autobus_id_autobus',
		'fecha',
		'hora',
		'destino',
		'precio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
