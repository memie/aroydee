<?php
/* @var $this BestsellerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bestsellers',
);

$this->menu=array(
	array('label'=>'Create Bestseller', 'url'=>array('create')),
	array('label'=>'Manage Bestseller', 'url'=>array('admin')),
);
?>
<br><br>
<h1 style="color: #2f97ff">
<b>เมนูแนะนำ</b></h1>

<?php $this->widget('zii.widgets.CListView', array(
		'template'=>'{items}{pager}',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
