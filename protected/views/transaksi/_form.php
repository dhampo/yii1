<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_transaksi'); ?>
		<?php echo $form->textField($model,'id_transaksi'); ?>
		<?php echo $form->error($model,'id_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_barang'); ?>
		<?php echo $form->dropDownList($model,'nama_barang',
			CHtml::listData(Barang::model()->findAll(),
			'nama_barang','nama_barang'),
			array("empty"=>"Pilih Barang")); ?>
		<?php echo $form->error($model,'nama_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_harga'); ?>
		<?php echo $form->textField($model,'total_harga'); ?>
		<?php echo $form->error($model,'total_harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->