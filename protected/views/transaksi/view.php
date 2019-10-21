<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->id_transaksi,
);

$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('index')),
	array('label'=>'Batalkan Transaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi),'confirm'=>'Apakah Anda Yakin Akan Membatalkan Transaksi Ini?')),
);
?>

<h1>View Transaksi #<?php echo $model->id_transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi',
		'nama_barang',
		'qty',
		'total_harga',
	),
)); ?>
