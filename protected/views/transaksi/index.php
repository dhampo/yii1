<?php
/* @var $this TransaksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi',
);

$this->menu=array(
	array('label'=>'Create Transaksi', 'url'=>array('create')),
	array('label'=>'Pembatalan Transaksi', 'url'=>array('admin')),
);
?>

<h1>Transaksi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
