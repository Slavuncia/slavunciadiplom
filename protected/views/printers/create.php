<?php
/* @var $this PrintersController */
/* @var $model Printers */

$this->breadcrumbs=array(
	'Принтеры'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список принтеров', 'url'=>array('index')),
	array('label'=>'Управление списком принтеров', 'url'=>array('admin')),
);
?>

<h1>Create Printers</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>