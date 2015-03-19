<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<br><br><br>
<h1 style="color:#804000"><b>แก้ไขสิทธิ์ ผู้ใช้ระบบ</b></h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">รายการที่มีเครื่องหมาย  <span class="required">*</span> จำเป็นต้องกรอก</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">

			<?php echo $form->dropDownList ($model,'type_id', array (
				'1'=>'Customer',
				'3'=>'Member',
				'4'=>'Admin',
		), array (
				'prompt' => 'Type User' 
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