<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Page Enter Transitions</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

	<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php include "sidebar.php"?>

	<div class="main-content">				
		
	<?php include "header.php"?>
	<?php include "content_home.php"?>	
		
		<br />
		
		<div class="row">
			<div class="col-sm-12">
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Update Makanan Terbaru</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Kalori</th>
								<th>Keterangan</th>
								<th>Foto</th>
							</tr>
						</thead>
		
						<tbody>
							<tr>
								<td>1</td>
								<td>Art Ramadani</td>
								<td>CEO</td>
								<td>CEO</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
							</tr>
		
							<tr>
								<td>2</td>
								<td>Ylli Pylla</td>
								<td>Font-end Developer</td>
								<td>CEO</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>
							</tr>
		
							<tr>
								<td>3</td>
								<td>Arlind Nushi</td>
								<td>Co-founder</td>
								<td>CEO</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Update Olahraga Terbaru</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Kalori</th>
								<th>Keterangan</th>
								<th>Foto</th>
							</tr>
						</thead>
		
						<tbody>
							<tr>
								<td>1</td>
								<td>Art Ramadani</td>
								<td>CEO</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
							</tr>
		
							<tr>
								<td>2</td>
								<td>Ylli Pylla</td>
								<td>Font-end Developer</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>
							</tr>
		
							<tr>
								<td>3</td>
								<td>Arlind Nushi</td>
								<td>Co-founder</td>
								<td>CEO</td>
								<td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>

		<br />

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url();?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url();?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="<?php echo base_url();?>assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/raphael-min.js"></script>
	<script src="<?php echo base_url();?>assets/js/morris.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/toastr.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url();?>assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="<?php echo base_url();?>assets/js/neon-demo.js"></script>

</body>
</html>