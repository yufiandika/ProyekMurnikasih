<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
</head>
<body>
	<div class="col-md-4 col-md-offset-4" style="margin-top: 100px">
	<div class="panel panel-default">
		<div class="panel-body">
	<center><h2>APLIKASI MURNIKASIH</h2>
		<h3>LOGIN</h3>
	</center>
		<br>
		<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger alert-danger'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}else if($_GET['pesan'] == "logout"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-success'>";
						echo $this->session->flashdata('Anda Telah Logout');
						echo "</div>";
					}
					//echo "<div class='alert alert-success'>Anda telah logout.</div>";
				}else if($_GET['pesan'] == "belumlogin"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-primary'>";
						echo $this->session->flashdata('alert');
						echo "</div>";
					}
					//echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
				}
			}else{
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-message'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}
			}
		?>
	<form method="post" action="<?php echo base_url().'welcome/login'?>">
		<div class="form-group">
			<input type="text" name="username" placeholder="username" class="form-control">
			<?php echo form_error('username'); ?>
				</div>

				<div class="form-group">
					<input type="password" name="password" placeholder="password" class="form-control">
					<?php echo form_error('password'); ?>
				</div>

				<div class="form-group">
			<input type="submit" value="Login" class="btn btn-primary">
		</div>
	</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>