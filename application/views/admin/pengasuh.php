<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Dashboard Murnikasih</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/panti.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.css'?>">
		
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
</head>
<body>
	<div id="wrapper">
		<div class="page-wrapper">
			<div class="page-inner">
				<h3 style="font-family: arial; font-size: 30px;">Data Pengasuh</h3>
				<hr>

				<a href="<?php echo base_url().'admin/tambah_pengasuh'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Pengasuh Baru</a>
				<br/><br/>

				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table-datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Pengasuh</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>No.HP</th>
								<th>Alamat</th>
								<th>Pilihan</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach($pengasuh as $p){
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $p->id_pengasuh ?></td>
								<td><?php echo $p->nm_pengasuh ?></td>
								<td><?php echo $p->jenis_kelamin ?></td>
								<td><?php echo $p->no_hp ?></td>
								<td><?php echo $p->alamat ?></td>
								<td nowrap="nowrap">
									<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_pengasuh/'.
									$p->id_pengasuh; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
									<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_pengasuh/'.
									$p->id_pengasuh; ?>"><span class="glyphicon glyphicon-remove"></span></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>