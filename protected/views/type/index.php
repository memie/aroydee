

<br>
<h1 style="color: #2f97ff">
	<font face=angsananew size=5><b>แนะนำร้านอาหาร<?php //echo $model->name; ?></b></font>
</h1>
 
<?php $this->widget('zii.widgets.CListView', array(
		'template'=>'{items}{pager}',
			
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
)); ?>


 <?php

// $this->widget ( 'bootstrap.widgets.TbGridView', array (
// 		'id' => 'menu-grid',
// 'template'=>'{items}{pager}',

// 		'dataProvider' => $menu->search ( '$model=>id', 'search', array (
// 				'type_id' => $menu->type_id = $model->id 
// 		) ),
		
// 		'columns' => array (
// 				// 'id',
// 				array ('type' => 'raw',
// 						'header'=>'เธ�เธทเน�เธญเธฃเน�เธฒเธ�  ',
// 						'name' => 'title',
				
// 				),
// 				array ('type' => 'raw',
// 						'header'=>'เธ—เธตเน�เธ•เธฑเน�เธ� ',
// 						'name' => 'address',
				
// 				),
// 				array ('type' => 'raw',
// 						'header'=>'เปิดปิดเวลา',
// 						'name' => 'business_hours',
				
// 				),
// 				array ('type' => 'raw',
// 						'header'=>'เน�เธ—เธฃ.',
// 						'name' => 'phone',
				
// 				),
				
				
				
// 				array (
// 						'type' => 'raw',
// 						'name' => ' ',
// 						'value' => 'CHtml::image("' . Yii::app ()->request->baseUrl . '/picture/$data->image", "image" ,array("width"=>300))',
// 						'filter' => false 
// 				),
				
// 				array(
// 						'class'=>'CButtonColumn',
// 						'htmlOptions'=>array('style'=>'width: 30px'),
// 						'template'=>'{view}',
// 				),
				
// 		// 'detail',
// 		// 'datetime',
// 				),

		 
// ) );
 ?>



