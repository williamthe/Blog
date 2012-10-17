<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

<!--<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Title:'); ?>
		<br />
		<?php echo $form->textField($model,'post_title',array('size'=>93,'maxlength'=>250)); ?>
		<!--<?php echo $form->error($model,'post_title'); ?>-->
	</div>
	
	<br />
	<div class="row">
		<?php echo $form->labelEx($model,'Post:'); ?>
		<br />
		<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50, 'class'=>'ckeditor', 'id'=>'post')); ?>
		<!--<?php echo $form->error($model,'post_content'); ?>-->
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>-->
	
	<br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Modify'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->