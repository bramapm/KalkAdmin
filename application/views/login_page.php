<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<!-- <link rel="icon" href="assets/images/favicon.ico"> -->

	<title>Login Page</title>

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
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">

</script>

<div class="login-container">	
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	

	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			
			<form method="post" role="form" id="form_login">
				<div class="col-md-12 text-center">
					<h1> <font style="color: white"> Kalkulator Gizi Login </font></h1> <br><br>
				</div>
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" id="login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>					
			</form>						
	</div>

	<script type="text/javascript">	
	$(document).ready(function(){
 	$('#username').focus(); // Focus username field

 	$('#login').click(function(){ // event click login
  	var username = $('#username'); // inisialisasi
  	var password = $('#password'); 
  	var base = window.location.origin+"/KalkulatorGiziService/index.php/Users";
  	
  	//validasi
  	if(username.val() == ''){
   		username.focus();
   		return false;
  		}
  	if(password.val() == ''){
   		password.focus();
   		return false;
  		}
  	
  	if(username.val() != '' && password.val() != ''){ // cek 
   	var dataLogin = 'method=login_web&username='+username.val()+'&password='+password.val();   	
	   	$.ajax({ // Menjalankan fungsi ajax
		   	type : 'POST',
		   	data : {
		   		method:"login_web",
		   		username:username.val(),
		   		password:password.val()
		   	},
		   	dataType : "JSON",
		   	url  : base,
		   	success: function(data){
		   	if (data.data.length != 0) {   		//start if
				var row = data.data[0];				
				$.ajax({
				   	type : 'POST',
				   	data : row,
				   	dataType : "JSON",
				   	url  : "<?= base_url().'index.php/Login/prosesLogin'; ?>",
				   	success: function(result){				   		
						window.location.href="<?= base_url().'index.php/Admin'; ?>";
						console.log(result);
					}
			   	});
			} else {
				alert('Gagal Login. Cek username dan password');
			} // end else
			}
	   	});
  	}
  	return false;
 	});
	});
	</script>
</div>

	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url();?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url();?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-login.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url();?>assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="<?php echo base_url();?>assets/js/neon-demo.js"></script>

</body>
</html>