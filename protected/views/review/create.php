<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>
<br><br>
<h1 style="color: #2f97ff">ตั้งกะทู้ร้านอาหาร...</h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>