<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'review-form',
		
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
 ?>

	<p class="note">รายการที่มีเครื่องหมาย  <span class="required">*</span> จำเป็นต้องกรอก</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	
		<?php echo $form->labelEx($model,'title'); ?><div><i>เช่น รีวิวร้าน "พันทิปข้าวมันไก่" สาขาสะพานควาย </i></div>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?><div><i>เช่น พันทิปข้าวมันไก่ </i></div>
		<?php echo $form->textArea($model,'detail',array('size'=>70, 'cols'=>150)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'รีวิว' : 'Create'); ?>
		&nbsp;
		<?php echo CHtml::button('ยกเลิก', array('submit' => array('review/admin'))); ?>
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->