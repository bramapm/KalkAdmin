<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Admin Page</title>

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

	<script type="text/javascript">
		var base_url = window.location.origin+"/KalkulatorGiziService/index.php/";
		function run_ajax(url, data, callback, type, dataType) {
			var cb = null;
			var tp = "POST";
			var dt = "JSON";
			if (typeof callback !== "undefined") {
				cb = callback;
			}
			if (typeof type !== "undefined") {
				tp = type;
			}
			if (typeof dataType !== "undefined") {
				dt = dataType;
			}
			$.ajax({
				url: url,
				data : data,
				type : tp,
				dataType : dt,
				success : cb
			});
		}
	</script>
</head>
<body class="page-body">

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php include "Admin/sidebar.php";?>
	<div class="main-content">				
	<?php include "Admin/header.php";?>
	<?php echo $this->load->view($content,null,true); ?>
	</div>
	</div>
	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url();?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url();?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-api.js"></script>
	<!-- Imported scripts on this page -->
	<script src="<?php echo base_url();?>assets/js/toastr.js"></script>
	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url();?>assets/js/neon-custom.js"></script>
	<!-- Demo Settings -->
	<script src="<?php echo base_url();?>assets/js/neon-demo.js"></script>

</body>
</html>