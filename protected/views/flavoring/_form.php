<?php
/* @var $this FlavoringController */
/* @var $model Flavoring */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flavoring-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'toner'); ?>
		<?php echo $form->textField($model,'toner',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'toner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ink'); ?>
		<?php echo $form->textField($model,'ink',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tape'); ?>
		<?php echo $form->textField($model,'tape',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tape'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->