<?php
/* @var $this AutobusController */
/* @var $model Autobus */

$this->breadcrumbs=array(
	'Autobuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Autobus', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Autobus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#autobus-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Autobuses</h1>

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
	'id'=>'autobus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_autobus',
		'matricula',
		'marca',
		'numero_pasajeros',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
