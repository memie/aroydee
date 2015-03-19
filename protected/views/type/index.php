

<br>
<h1 style="color: #2f97ff">
	<font face=angsananew size=5><b>แนะนำร้านอาหาร<?php //echo $model->name; ?></b></font>
</h1>
 
<?php $this->widget('zii.widgets.CListView', array(
		'template'=>'{items}{pager}',
			
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
)); ?>


