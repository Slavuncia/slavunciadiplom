<?php
/* @var $this FlavoringController */
/* @var $data Flavoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toner')); ?>:</b>
	<?php echo CHtml::encode($data->toner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ink')); ?>:</b>
	<?php echo CHtml::encode($data->ink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tape')); ?>:</b>
	<?php echo CHtml::encode($data->tape); ?>
	<br />


</div>