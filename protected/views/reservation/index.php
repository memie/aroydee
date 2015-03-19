<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs = array (
		'Reservations' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Reservation',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Reservation',
				'url' => array (
						'admin' 
				) 
		) 
);
?>


<h2 style="color: #2f97ff">
	<b>เมนูแนะนำ</b>
</h2>


<div class="gridviewset">
<?php

$this->widget ( 'bootstrap.widgets.TbGridView', array (
		'id' => 'best-seller-grid',
		'template' => '{items}{pager}',
		'dataProvider' => $bestseller->search (),
		// 'filter'=>$model,
		'columns' => array (
				// 'id',
				
				'title',
				array (
						'type' => 'raw',
						'name' => ' ',
						'value' => 'CHtml::image("' . Yii::app ()->request->baseUrl . '/picture/$data->image", "image" ,array("width"=>300))',
						'filter' => false
				),
				
				
				'menu_id',
				array(
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('style'=>'width: 30px'),
						'template'=>'{view}',
				),
				
		// 'datetime',
				) 
) );
?></div>




