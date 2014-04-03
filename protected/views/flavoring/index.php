<?php
/* @var $this FlavoringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Заправка',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Управление</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
