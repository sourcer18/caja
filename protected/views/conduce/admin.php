<?php
/* @var $this ConduceController */
/* @var $model Conduce */

$this->breadcrumbs=array(
	'Conduces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Conduce', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Conduce', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conduce-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Conduces</h1>

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
	'id'=>'conduce-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_conduce',
		'conductor_id_conductor',
		'autobus_id_autobus',
		'viaje_id_viaje',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
