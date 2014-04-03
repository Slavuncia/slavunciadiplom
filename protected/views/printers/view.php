<?php
/* @var $this PrintersController */
/* @var $model Printers */

$this->breadcrumbs=array(
	'Принтеры'=>array('index'),
	$model->model,
);

$this->menu=array(
	array('label'=>'Список принтеров', 'url'=>array('index')),
	array('label'=>'Создать принтер', 'url'=>array('create')),
	array('label'=>'Изменить принтер', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить принтер', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление списком принтеров', 'url'=>array('admin')),
);
?>

<h1>Просмотр принтера <?php echo $model->model; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'model',
		'type',
	),
)); ?>
