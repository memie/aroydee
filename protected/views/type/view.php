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
// Yii::import('ext.gmap.*');
 
// $gMap = new EGMap();
// // using the new magic setters
// // check available options per class
// // objects with setMethod,getMethod and
// // options array can be set now this way
// $gMap->zoom = 10;
// $mapTypeControlOptions = array(
//    // yes we can position the controls now
//    // where we want
//    'position'=> EGMapControlPosition::LEFT_BOTTOM,
//    'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
// );
 
// $gMap->mapTypeControlOptions= $mapTypeControlOptions;
 
// // enabling KML Service. Second parameter of this 
// // function tells whether is localhost or not. GeoXML3.js 
// // is needed to read localhost KML files.
// $gMap->enableKMLService('http://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml');
 
// $gMap->renderMap();
// ?>
          </div>
        </div>
      </div>
		
		
</div>



