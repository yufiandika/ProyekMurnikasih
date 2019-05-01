<style type="text/css">
			#wrapper{
				width: 100%;
			}
			.page-wrapper{
				margin-left: 270px;
				padding: 15px 35px;
				height: 600px;
				background:#F3F3F3;
			}
			.page-inner{
				margin:20px 20px 20px 0px;
   				background-color:#fff;
    			padding:15px;
				width: 100%;
				height: 550px;
			}

		</style>


<div id="wrapper">
<div class="page-wrapper">
<div class="page-inner">
	<h3>Edit Pengasuh</h3>
<br/><br/>
<?php foreach($pengasuh as $p){ ?>
<form action="<?php echo base_url().'admin/update_pengasuh' ?>" method="post">
	<div class="form-group">
		<label>Nama Pengasuh</label>
		<input type="hidden" name="id" value="<?php echo $p->id_pengasuh; ?>">
		<input class="form-control" type="text" name="nm_pengasuh" value="<?php echo $p->nm_pengasuh; ?>">
		<?php echo form_error('nm_pengasuh'); ?>
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input class="form-control" type="text" name="jenis_kelamin" value="<?php echo $p->jenis_kelamin; ?>">
		<?php echo form_error('jenis_kelamin'); ?>
	</div>

	<div class="form-group">
		<label>No.HP</label>
		<input class="form-control" type="text" name="no_hp" value="<?php echo $p->no_hp; ?>">
		<?php echo form_error('no_hp'); ?>
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input class="form-control" type="text" name="alamat" value="<?php echo $p->alamat; ?>">
		<?php echo form_error('alamat'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="Update" class="btn btnprimary">
	</div>

</form>
<?php } ?>
</div>
</div>
</div>