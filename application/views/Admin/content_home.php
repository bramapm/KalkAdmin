<div class="row">
	<div class="col-sm-12">
	<h1>
		<?php echo $judul ?>
	</h1>
	</div>
</div>
<div class="row">
<div class="col-md-6 col-xs-6">

	<div class="tile-stats tile-red">
		<div class="icon"><i class="entypo-chart-bar"></i></div>
		<div class="num" data-start="0" data-end="20" data-postfix="" data-duration="1500" data-delay="0">0</div>
		<h3>Data Kalori</h3>
		<p>Data Kalori tersedia</p>
	</div>		
</div>

<div class="col-md-6 col-xs-6">
	<div class="tile-stats tile-green">
		<div class="icon"><i class="entypo-chart-bar"></i></div>
		<div class="num" data-start="0" data-end="15" data-postfix="" data-duration="1500" data-delay="600">0</div>
		<h3>Data Olahraga</h3>
		<p>Data Olahraga saat ini</p>
	</div>
</div>
<div class="clear visible-xs"></div>
</div>


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

<script>
	$('.delete').on("click", function(e){
		run_ajax(base_url+"Makanan", {method:"get_count", function (result) {	
		console.log(mboh);

	}});});
</script>