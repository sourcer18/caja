<?php
/* @var $this PermisosController */
/* @var $model Permisos */

$this->breadcrumbs=array(
	'Permisoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List'). ' Permisos', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create'). ' Permisos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#permisos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Permisoses</h1>

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
	'id'=>'permisos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idPermisos',
		'nombre',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
