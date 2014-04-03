<?php
/* @var $this PrintersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Принтеры',
);

$this->menu=array(
	array('label'=>'Создать принтер', 'url'=>array('create')),
	array('label'=>'Управление списком принтеров', 'url'=>array('admin')),
);
?>

<h1>Принтеры</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
