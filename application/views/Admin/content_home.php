<div class="rof">
	<div class="col-sm-12">
	<h1>
		<?php echo $judul ?>		
		<?php echo $this->session->userdata('status'); ?>
	</h1>
	</div>
</div>
<div class="row">
<div class="col-md-6 col-xs-6">

	<div class="tile-stats tile-red">
		<div class="icon"><i class="entypo-chart-bar"></i></div>
		<div class="num" id="count" data-start="0" data-end="16" data-postfix="" data-duration="1500" data-delay="0">0</div>
		<h3>Data Kalori</h3>
		<p>Data Kalori tersedia</p>
	</div>		
</div>

<div class="col-md-6 col-xs-6">
	<div class="tile-stats tile-green">
		<div class="icon"><i class="entypo-chart-bar"></i></div>
		<div class="num" data-start="0" data-end="9" data-postfix="" data-duration="1500" data-delay="600">0</div>
		<h3>Data Olahraga</h3>
		<p>Data Olahraga saat ini</p>
	</div>
</div>
<div class="clear visible-xs"></div>
</div>


<div class="row">	
</div>

<script>
	$('#count').on("click", function(e){
		run_ajax(base_url+"Makanan", {method:"get_count", function (result) {	
		console.log(jalan);

	}});});
</script>