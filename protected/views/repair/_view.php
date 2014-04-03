<?php
/* @var $this RepairController */
/* @var $data Repair */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kartidj')); ?>:</b>
	<?php echo CHtml::encode($data->Kartidj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fotobaraban')); ?>:</b>
	<?php echo CHtml::encode($data->Fotobaraban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Val_pervicnovo_zareada')); ?>:</b>
	<?php echo CHtml::encode($data->Val_pervicnovo_zareada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Magnitnii_val')); ?>:</b>
	<?php echo CHtml::encode($data->Magnitnii_val); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Doziruushee_lezvie')); ?>:</b>
	<?php echo CHtml::encode($data->Doziruushee_lezvie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rakel')); ?>:</b>
	<?php echo CHtml::encode($data->Rakel); ?>
	<br />


</div>