<?php
/* @var $this BestsellerController */
/* @var $model Bestseller */


<?php
/* @var $this MenuController */
/* @var $model Menu */

/* $this->breadcrumbs=array(

		'เมนู'.$model->title,
			
);  */

?>

<br>
<?php echo CHtml::button('กลับไปก่อนหน้านี้', array('submit' => array('type/index', 'id'=>'1'))); ?>
<br><br>

<div class="thumbnails">
        <div class="span7">
    <h1 style="color: #2f97ff"><b>   
<?php 
			echo  $model->title ;
			
?>
<br><br>

			 <img src="<?php echo Yii::app()->request->baseUrl . '/picture/'.$model->image ?>" height="300px"> 

</b></h1>  
         
         
<div class="gridviewset">



<b>มีอะไรจะบอก! :</b>
<?php 
		
			echo $model->description ;
			
?>

<br><br>	
<b>ที่ตั้ง:</b>
<?php 
		
		
			echo $model->address  ;
			
?>
<br><br>
<b>เบอร์โทรติดต่อ:</b>
<?php 
		
			echo  $model->phone;
			
?>

<br><br>
<b>เปิดปิดเวลา:</b>
<?php 
		
			echo  $model->business_hours ;
			
?>

</div>
        </div><!--/span-->
     
        <div class="span3">
          <div id="content">

<h2 style="color: #2f97ff">
	<b>แผนที่ร้าน</b>
</h2>
 <?php

 ?>

		













$this->breadcrumbs = array (
		'Bestsellers' => array (
				'index' 
		),
		$model->id 
);

$this->menu = array (
		array (
				'label' => 'List Bestseller',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Bestseller',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Bestseller',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Delete Bestseller',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => 'Are you sure you want to delete this item?' 
				) 
		),
		array (
				'label' => 'Manage Bestseller',
				'url' => array (
						'admin' 
				) 
		) 
);
?>
<br>
<br>
<br>
<h1 style="color: #804000">
	<b>View Bestseller </b>
</h1>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Back',
    'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url'=>array('admin'),
)); 
?>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'attributes' => array (
				
				array (
						'name' => 'bestseller.image',
						'type' => 'html',
						'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/picture/' . $model->image, '', array (
								'width' => 200,
								'height' => 200 
						) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/picture/noimage.jpg', '', array (
								'width' => 105,
								'height' => 105 
						) ) 
				),
				'title',
				'detail' 
		) 
) ); ?>
