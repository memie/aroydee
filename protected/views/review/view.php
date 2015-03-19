<div class="span4">
    <div class="thumbnail">
      <img src="<?php echo Yii::app()->request->baseUrl . '/picture/'.$data->image ?>" height="300px">
      <div class="caption">
      <?php echo $data->id;?> 
        <h3><b>รีวิวร้าน:</b><?php echo $data->title;?></h3>
        <b>ความคิดเห็น:</b><p><?php echo $data->detail;?></p>
      
          
        <p><a href="index.php?r=bestseller/view&id=<?php echo $data->id;?>" class="btn btn-primary" role="button">รายละเอียดเพิ่มเติม</a></p>
      </div>
    </div>
  </div>