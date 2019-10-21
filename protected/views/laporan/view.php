<?php
/* @var $this LaporanController */
/* @var $model Laporan */

$this->breadcrumbs=array(
	'Laporans'=>array('index'),
	$model->id_transaksi,
);

$this->menu=array(
	array('label'=>'List Laporan', 'url'=>array('index')),
	array('label'=>'Create Laporan', 'url'=>array('create')),
	array('label'=>'Update Laporan', 'url'=>array('update', 'id'=>$model->id_transaksi)),
	array('label'=>'Delete Laporan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Laporan', 'url'=>array('admin')),
);
?>

<h1>View Laporan #<?php echo $model->id_transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi',
		'nama_barang',
		'qty',
		'total_harga',
	),
)); ?>
