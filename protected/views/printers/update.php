<?php
/* @var $this PrintersController */
/* @var $model Printers */

$this->breadcrumbs=array(
	'Принтеры'=>array('index'),
	$model->model=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список принтеров', 'url'=>array('index')),
	array('label'=>'Создать принтер', 'url'=>array('create')),
	array('label'=>'Просмотр списка принтеров', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление списком принтеров', 'url'=>array('admin')),
);
?>

<h1>Изменить принтер <?php echo $model->model; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>