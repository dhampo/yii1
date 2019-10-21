<?php
/* @var $this LaporanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Laporan',
);

?>

<h1>Laporan</h1>

<?php 
	$this->widget('ext.highcharts.highcharts.HighchartsWidget', array(
   'options' => array(
      'title' => array('text' => 'Penjualan'),
      'xAxis' => array(
         'categories' => array('Sedan', 'MPV', 'SUV' , 'HATCHBACK')
      ),
      'yAxis' => array(
         'title' => array('text' => 'Penjualan')
      ),
      'series' => array(
         array('name' => 'Toyota', 'data' => array(5, 7, 3, 0))
      )
   )
)); ?>
