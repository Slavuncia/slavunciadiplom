<?php
/* @var $this FlavoringController */
/* @var $model Flavoring */

$this->breadcrumbs=array(
	'Заправка'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>