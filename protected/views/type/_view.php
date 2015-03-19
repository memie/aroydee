
  <div class="span4">
    <div class="thumbnail">
      <img src="<?php echo Yii::app()->request->baseUrl . '/picture/'.$data->image ?>" height="300px">
      <div class="caption">
      <?php //echo $data->id;?> 
        <h3><?php echo $data->title;?></h3>
        <b>ที่ตั้ง:</b><p><?php echo $data->address;?></p>
        <b>เบอร์โทรติดต่อ:</b><p><?php echo $data->phone;?></p>
         <b>เปิดปิดเวลา:</b><p><?php echo $data->business_hours;?></p>
  
        <p><a href="index.php?r=type/view&id=<?php echo $data->id;?>" class="btn btn-primary" role="button">รายละเอียดเพิ่มเติม</a></p>
      </div>
    </div>
  </div>
