<!-- Side Bar -->
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<img src="assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="">
					<a href="<?php echo base_url();?>index.php/Admin">
						<i class="entypo-layout"></i>
						<span class="title">Home</span>
					</a>					
				</li>

				<li class="">
					<a href="<?php echo base_url();?>index.php/Admin/Kalori">
						<i class="entypo-layout"></i>
						<span class="title">Data Kalori</span>
					</a>					
				</li>

				</li>
				<li class="">
					<a href="<?php echo base_url();?>index.php/Admin/Olahraga">
						<i class="entypo-layout"></i>
						<span class="title">Data Olahraga</span>
					</a>					
				</li>
			</ul>
		</div>
	</div>
	<!-- Side Bar -->