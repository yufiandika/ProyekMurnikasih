<html lang="en">
<head>
	<title>MURNIKASIH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/panti.css'?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>
		<div id="slideimg"><!--<img src="<?php echo base_url().'assets/img/gambar1.jpg'?>">-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

			<!--slides-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
						<img src="<?php echo base_url().'assets/img/panti1.jpg'?>" style="width: 100%; height: 400px">
					<div class="carousel-caption">
					</div>
				</div>

				<div class="item">
					<img src="<?php echo base_url().'assets/img/panti.jpg'?>" style="width: 100%; height: 400px">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<!--left and rights control-->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>
	</body>