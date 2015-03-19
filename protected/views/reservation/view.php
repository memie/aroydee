<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/*$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->name,
);*/
?>

<br><br>

<?php echo CHtml::button('กลับไปก่อนหน้านี้', array('submit' => array('reservation/index', 'id'=>'2'))); ?>
<br><br>
<?php foreach ($model as $value){ 

		?>



<div class="thumbnails">
        <div class="span9">
    <h1 style="color: #2f97ff"><b>   
<?php 
			echo  $value['title'] ;
			
?>
<br><br>
<?php 
			echo '<img src="picture/2015.02.27 23.45.11_img.jpg"  ait="memu.title"  width="350" height="350"> ';
?>
</b></h1>  
         
         
<div class="gridviewset">



<b>ประวัติร้าน : ...</b>
<?php 
		
			echo  $value['description'] ;
			
?>

<br><br>	
<b>ที่ตั้ง:</b>
<?php 
		
			echo  $value['address'] ;
			
?>
<br><br>
<b>เบอร์โทรติดต่อ:</b>
<?php 
		
			echo  $value['phone'] ;
			
?>
<br><br>
<b>ประเภทร้าน:</b>
<?php 
		
			echo  $value['name'] ;
			
?>
<br><br>
<b>เปิดปิดเวลา:</b>
<?php 
		
			echo  $value['business_hours'] ;
			
?>

</div>
        </div><!--/span-->
     
        <div class="span3">
          <div id="content">

<h2 style="color: #2f97ff">
	<b>แผนที่ร้าน</b>
</h2>


 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1976.0420736200601!2d98.387641!3d7.886265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305031f079c451f3%3A0x701b9d30392de45c!2z4Lil4LiB4LmA4LiX4Li14LmJ4Lii4LiZ!5e0!3m2!1sth!2sth!4v1426154853141" width="400" height="350" frameborder="0" style="border:0"></iframe>         <br />
          </div>
        </div>
      </div>
		
		
</div>


<?php } ?> 

