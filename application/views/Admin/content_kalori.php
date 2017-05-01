<div class="row">
	<div class="col-lg-8">
	<h1>
		<?php echo $judul ?>
	</h1>
	</div>

	<div class="col-lg-4 col-xs-6 text-right">
		<a class="btn btn-primary" style="margin-top: 5px;" data-toggle="modal" data-target="#modalTambahMk">
			<i class="entypo-plus"></i>
			Tambah Data
		</a>
	</div>
</div>

<div class="row">
<div class="col-md-12">
		<br />
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table3 = jQuery("#table-3");
			
			var table3 = $table3.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			} );
			
			// Initalize Select Dropdown after DataTables is created
			$table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});					
			
			// Apply the search
			table3.columns().every( function () {
				var that = this;
			
				$( 'input', this.footer() ).on( 'keyup change', function () {
					if ( that.search() !== this.value ) {
						that
							.search( this.value )
							.draw();
					}
				} );
			} );
		});
		</script>
		
		<table class="table table-bordered datatable" id="tblKalori">
			<thead>
				<tr class="replace-inputs">
					<th>ID</th>
					<th width="15%">Nama</th>
					<th width="10%">jenis</th>
					<th width="5%">kkal</th>
					<th width="5%">karbo</th>
					<th width="5%">protein</th>
					<th width="5%">lemak</th>
					<th width="25%">foto</th>
					<th width="20%">keterangan</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<tfoot>
				<tr>
				<th>ID</th>
					<th>Nama</th>
					<th>jenis</th>
					<th>kkal</th>
					<th>karbo</th>
					<th>protein</th>
					<th>lemak</th>
					<th>foto</th>
					<th>keterangan</th>
					<th>action</th>
				</tr>
			</tfoot>
		</table>
		<br />
</div>
</div>


<div id="modalTambahMk" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Kalori</h4>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<form role="form" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">
					<div class="form-group">							
						<label class="col-sm-3">Nama</label>						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama" name="nama_makanan" placeholder="Nama" required> 
						</div>
					</div>

					<div class="form-group">							
						<label class="col-sm-3">jenis</label>						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis" required>
						</div>
						<br>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Kalori</label>						
						<div class="col-sm-8">							
							<input type="text" class="form-control" data-mask="9999" data-numeric="true" data-numeric-align="right" placeholder="Kalori" name="kkal" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Karbohidrat</label>						
						<div class="col-sm-8">							
							<input type="text" class="form-control" data-mask="9999" data-numeric="true" data-numeric-align="right" placeholder="Karbohidrat" name="karboh" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Protein</label>						
						<div class="col-sm-8">							
							<input type="text" class="form-control" data-mask="9999" data-numeric="true" data-numeric-align="right" placeholder="Protein" name="protein" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Lemak</label>						
						<div class="col-sm-8">							
							<input type="text" class="form-control" data-mask="9999" data-numeric="true" data-numeric-align="right" placeholder="Lemak" name="lemak" required/>
						</div>
					</div>

					<div class="form-group">							
						<label class="col-sm-3">Keterangan</label>						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
						</div>
						<br>
					</div>

					<div class="form-group">
						<label class="col-sm-3">File Field</label>					
						<div class="col-sm-8">
							<input type="file" class="form-control" id="foto" name="foto" placeholder="Input File Foto">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9"></div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary text-left tambahMk">Tambah</button>
						</div>				
					</div>
				</div>
				<!-- end modal body -->

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				<!-- ENd modal footer -->
			</form>
			<!-- End Form -->
		</div>
	</div>
</div>
<!-- end modal -->

<div id="modalUpdateMk" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update</h4>
			</div>
			<!-- modal body -->
			<div class="modal-body">
				<form enctype="multipart/form-data" class="form-horizontal form-groups-bordered" method="POST">
					<div class="form-group">
						<input class="id_makanan" type="hidden" name="id_makanan">
						<label class="col-sm-3" for="nama">Nama</label>
						<div class="col-sm-8">	
							<input class="form-control nama_makanan" type="text" name="nama_makanan">
						</div>
					</div>

					<div class="form-group">							
						<label class="col-sm-3">Jenis</label>
						<div class="col-sm-8">
							<input type="text" class="form-control jenis" id="jenis" name="jenis" placeholder="Jenis" required>
						</div>
						<br>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Kkal</label>						
						<div class="col-sm-8">							
							<input class="form-control kkal" type="text" class="form-control" data-mask="9999" data-numeric="tKue" data-numeric-align="right" placeholder="kkal" name="kkal" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">karbo</label>
						<div class="col-sm-8">							
							<input class="form-control karbo" type="text" class="form-control" data-mask="9999" data-numeric="tKue" data-numeric-align="right" placeholder="karbo" name="karbo" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">protein</label>						
						<div class="col-sm-8">							
							<input class="form-control protein" type="text" class="form-control" data-mask="9999" data-numeric="tKue" data-numeric-align="right" placeholder="protein" name="protein" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">lemak</label>						
						<div class="col-sm-8">							
							<input class="form-control lemak" type="text" class="form-control" data-mask="9999" data-numeric="tKue" data-numeric-align="right" placeholder="lemak" name="lemak" required/>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Foto</label>					
						<div class="col-sm-8">
							<input type="file" class="form-control" id="foto" name="foto" placeholder="Input File Foto">
						</div>
					</div>

					<div class="form-group">							
						<label class="col-sm-3">Keterangan</label>
						<div class="col-sm-8">
							<input type="text" class="form-control keterangan" id="keterangan" name="keterangan" placeholder="Jenis" required>
						</div>
						<br>
					</div>

					<div class="form-group">
						<div class="col-sm-8"></div>
						<div class="col-sm-2">
							<button type="button" class="btn btn-primary text-left editMk">Update</button>
						</div>				
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
			<!-- end modal body -->
		</div>
	</div>
</div>
<!-- end modal update -->

<!-- Modal deleteMk -->
<div class="modal fade" id="modaldeleteMk" role="dialog">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
           </div>
           <div class="modal-body">

               <div class="text-deleteMk"></div>

           </div>
           <div class="modal-footer">
               <form method="post">
                   <input class="id_makanan" type="text" name="id_makanan">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-danger deleteMk">Delete</button>
               </form>
           </div>
       </div>
   </div>
</div>


<link rel="stylesheet" href="<?php echo base_url();?>assets/js/datatables/datatables.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/select2/select2.css">

	<!-- Imported scripts on this page -->
	<script src="<?php echo base_url();?>assets/js/datatables/datatables.js"></script>
	<script src="<?php echo base_url();?>assets/js/select2/select2.min.js"></script>

	<script src="assets/js/jquery.inputmask.bundle.js"></script>

<script type="text/javascript">
	var table = $("table#tblKalori");
	var dt_table = table.DataTable();
	var modalTambahMk = $("#modalTambahMk");
	var formTambah = modalTambahMk.find("form");
	var modalEditMk = $("#modalUpdateMk");
	var formUpdate = modalEditMk.find("form");
		
	function run_table() {
		dt_table.clear();
		run_ajax(base_url+"Makanan", {method:"get_makanan"}, function (result) {
			// console.log(data);
			var data_arr = [];
			result.data.forEach(function (row, i) {			
				
				var val = Object.values(row);
				val[val.length] = "<button type='button' style='margin-bottom: 5px;' class='btn btn-success tombolMk' data-toggle='modal' data-target='#modalUpdateMk' data-id_makanan='"+row.id_makanan+"' data-nama_makanan='"+row.nama_makanan+"' data-jenis='"+row.jenis+"' data-kkal='"+row.kkal+"' data-karbo='"+row.karbo+"' data-protein='"+row.protein+"' data-lemak='"+row.lemak+"' data-foto='"+row.foto+"' data-keterangan='"+row.keterangan+"'><span class='glyphicon glyphicon-pencil'></span></button>"+
				"&nbsp<button type='button' style='margin-bottom: 5px;' class='btn btn-success tombolMk deleteMk' data-toggle='modal' data-target='#modaldeleteMk'"+
				"data-id_makanan='"+row.id_makanan+"' data-nama_makanan='"+row.nama_makanan+"'><span class='glyphicon glyphicon-trash'></span></button>"
				data_arr[i] = val;
			});
			dt_table.rows.add(data_arr);
			dt_table.draw();
			// console.log(data_arr);
			// dt_table.DataTable({
			// 	"aaData":data_arr
			// });
		});
	}
	run_table();
 
$(document).on("click", '.tombolMk', function(e){
	var id_makanan = $(this).data('id_makanan');
	var nama_makanan = $(this).data('nama_makanan');
	var jenis = $(this).data('jenis');
	var kkal = $(this).data('kkal');
	var karbo = $(this).data('karbo');
	var protein = $(this).data('protein');
	var lemak = $(this).data('lemak');
	var keterangan = $(this).data('keterangan');
	var foto = $(this).data('foto');

	$(".id_makanan").val(id_makanan);
	$(".nama_makanan").val(nama_makanan);
	$(".jenis").val(jenis);
	$(".kkal").val(kkal);
	$(".karbo").val(karbo);
	$(".protein").val(protein);
	$(".lemak").val(lemak);
	$(".keterangan").val(keterangan);
	$(".foto").val(foto);

	$(".text-deleteMk").text("Apakah anda yakin akan menghapus data dengan nama " + nama_makanan + "?");
});

	$('button.tambahMk').on("click", function(e){
		var data = formTambah.serialize();
		data += "&method=insert&foto=";
		
		run_ajax(base_url+"Makanan", data, function (result) {
			console.log(result);
		});
	});	

	$('button.editMk').on("click", function(e){
		var data = formUpdate.serialize();
		data += "&method=update&foto=";
		console.log(data);
		run_ajax(base_url+"Makanan", data, function (result) {
			console.log(result);
		});
	});

	$('button.deleteMk').on("click", function(e){				
		run_ajax(base_url+"Makanan", {method:"delete", id_makanan:$(".id_makanan").val()}, function (result) {
			console.log(result);
		});
	});
</script> 
