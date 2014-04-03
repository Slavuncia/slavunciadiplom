<?php
/* @var $this RepairController */
/* @var $model Repair */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kartidj'); ?>
		<?php echo $form->textField($model,'Kartidj',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fotobaraban'); ?>
		<?php echo $form->textField($model,'Fotobaraban',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Val_pervicnovo_zareada'); ?>
		<?php echo $form->textField($model,'Val_pervicnovo_zareada',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Magnitnii_val'); ?>
		<?php echo $form->textField($model,'Magnitnii_val',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Doziruushee_lezvie'); ?>
		<?php echo $form->textField($model,'Doziruushee_lezvie',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rakel'); ?>
		<?php echo $form->textField($model,'Rakel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->