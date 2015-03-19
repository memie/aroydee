<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">รายการที่มีเครื่องหมาย * จำเป็นต้องกรอก</p>


	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ประเภท'); ?>
		<?php echo $form->dropDownList ($model,'type_id', array (
				'1'=>'customer',
				'3'=>'member',
				'4'=>'Admin',
				
				), array (	'prompt' => 'ประเภทผู้ใช้' 
		) ); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'ชื่อ'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'รหัสผ่าน'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'อีเมล'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'ตกลง' : 'Save'); ?> &nbsp;&nbsp;
		<?php echo CHtml::button('ยกเลิก', array('submit' => array('user/admin'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->