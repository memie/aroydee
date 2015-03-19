<h1 style="color: #804000">
<b>ลงทะเบียน</b></h1>
<div class="form">
 
<?php  $form = $this->beginWidget('CActiveForm', array(
'id' => 'users-register-form',
'enableAjaxValidation' => false,
'enableClientValidation' => true,
'clientOptions' => array('validateOnSubmit' => true),
'htmlOptions' => array(
'enctype' => 'multipart/form-data',
)
));  ?>
 

	<p class="note">รายการที่มีเครื่องหมาย  * จำเป็นต้องกรอก</p>
 
 <?php echo $form->errorSummary($model); ?>
 
 <div class="row">
  <?php echo $form->labelEx($model,'ชื่อ'); ?>
  <?php echo $form->textField($model,'username'); ?>
  <?php echo $form->error($model,'username'); ?>
 </div>
 
 <div class="row">
  <?php echo $form->labelEx($model,'รหัสผ่าน'); ?>
  <?php echo $form->passwordField($model,'password'); ?>
  <?php echo $form->error($model,'password'); ?>
 </div>
 
  <div class="row">
  <?php echo $form->labelEx($model,'ยืนยันรหัสผ่าน'); ?>
  <?php echo $form->passwordField($model,'repassword'); ?>
  <?php echo $form->error($model,'repassword'); ?>
 </div>
 

  
 <div class="row">
  <?php echo $form->labelEx($model,'อีเมล'); ?>
  <?php echo $form->textField($model,'email'); ?>
  <?php echo $form->error($model,'email'); ?>
 </div>
 
  <div class="row">
  <?php echo $form->labelEx($model,'รูปประจำตัว'); ?>
  <?php echo $form->fileField($model,'user_pic'); ?>
  <?php echo $form->error($model,'user_pic'); ?>
 </div>
 
 
 <div class="row buttons">
  <?php echo CHtml::submitButton('ยืนยัน'); ?>
 </div>
 
<?php $this->endWidget(); ?>
 
</div>