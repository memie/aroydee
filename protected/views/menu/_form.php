<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'menu-form',
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
 ?>

	<p class="note">รายการที่มีเครื่องหมาย  * จำเป็นต้องกรอก</p>

	<?php echo $form->errorSummary($model); ?>
<?php echo $form->errorSummary($type); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'ชื่อร้าน'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'ที่ตั้ง'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'เปิดปิดเวลา'); ?>
		<?php echo $form->textField($model,'business_hours',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'business_hours'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'เบอร์โทรศัพท์'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'ละติจูด'); ?>
		<?php echo $form->textField($model,'latitude',array('size'=>60,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'ลองติจูด'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>60,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ประเภทร้าน'); ?>
		<?php echo $form->dropDownList($model,'type_id', CHtml::listData ( Type::model ()->findAll (), 'id','name' ), array (
			'prompt' => '===เลือกประเภทร้าน===' 
		) ); ?>
		<?php echo $form->error($model,'type_id'); ?>
		
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ให้คะแนน'); ?>
		<?php $this->widget('CStarRating',array(
    	'model'=>$model,
    	'attribute'=>'score',
    		 'name'=>'score',
    	//	 'value'=>3,
			));?>
		
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'รูปภาพ'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'ตกลง' : 'Save'); ?> &nbsp;&nbsp;
		<?php echo CHtml::button('ยกเลิก', array('submit' => array('menu/admin'))); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->