<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
);

$this->menu=array(
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>
<br><br>
<h1 style="color: #2f97ff">
<b>รีวิวร้านอาหาร</b> จากสมาชิก อร่อยดี ภูเก็ต</h1>




<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'view',
)); ?>
