<?php
/* @var $this RepairController */
/* @var $model Repair */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'repair-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Kartidj'); ?>
		<?php echo $form->textField($model,'Kartidj',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Kartidj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fotobaraban'); ?>
		<?php echo $form->textField($model,'Fotobaraban',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Fotobaraban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Val_pervicnovo_zareada'); ?>
		<?php echo $form->textField($model,'Val_pervicnovo_zareada',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Val_pervicnovo_zareada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Magnitnii_val'); ?>
		<?php echo $form->textField($model,'Magnitnii_val',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Magnitnii_val'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doziruushee_lezvie'); ?>
		<?php echo $form->textField($model,'Doziruushee_lezvie',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Doziruushee_lezvie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rakel'); ?>
		<?php echo $form->textField($model,'Rakel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Rakel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->