<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array (
		'Users' => array (
				'index' 
		),
		'Manage' 
);

$this->menu = array (
		array (
				'label' => 'List User',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create User',
				'url' => array (
						'create' 
				) 
		) 
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>
<br>
<br>
<br>
<br>
<h1 style="color: #804000">
	<b>จัดการผู้ใช้</b>
</h1>


<br>
<?php echo CHtml::button('เพิ่มผู้ใช้', array('submit' => array('user/create'))); ?>
<center>
<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'user-grid',
		'template' => '{items}{pager}',
		
		'dataProvider' => $model->search (),
		// 'filter'=>$model,
		'columns' => array (
				
				
	'name',
				'login_date',
			
				//'type_id',
				array(
		'name' => 'type_id', //edited
		'header'=>'Type User',
		'value' => '$data->type_id ==4 ?  "Admin"', 
),
				array(
		'class'=>'CButtonColumn',
		'htmlOptions'=>array('style'=>'width: 30px'),
		'template'=>'{update} {delete}',
),
	),
)); ?></center>
