<div class="row">
	<div class="col-lg-8 col-xs-6">
		<h2 style="padding-top: 0px;">
			<?php echo $judul ?>
		</h2>
	</div>

	<div class="col-lg-4 col-xs-6 text-right">
		<a href="#" class="btn btn-primary" style="margin-top: 5px;" data-toggle="modal" data-target="#modalTambah">
			<i class="entypo-plus"></i>
			Tambah Data
		</a>
	</div>
</div>

<div id="modalTambah" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Olahraga</h4>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<form role="form" enctype="multipart/form-data" class="form-horizontal form-groups-bordered" id="formTambah">
					<div class="form-group">							
						<label class="col-sm-3">Nama</label>						
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_olahraga" name="nama_olahraga" placeholder="Nama" required autofocus> 
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Kalori / menit</label>						
						<div class="col-sm-8">							
							<input type="text" class="form-control" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47" placeholder="Kalori / menit" name="kkal" id="kkal" required/>
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
						<label class="col-sm-3">Foto</label>					
						<div class="col-sm-8">
							<input type="file" class="form-control" id="foto" name="foto" placeholder="Input File Foto">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9"></div>
						<div class="col-sm-2">
							<button type="button" class="btn btn-primary text-left tambah">Tambah</button>
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
		} );
	</script>

	<table class="table table-bordered datatable" id="tableOlg">
		<thead>
			<tr class="replace-inputs">
				<th width="5%">No</th>
				<th width="15%">Nama</th>
				<th width="5%">kkal</th>
				<th width="20%">keterangan</th>
				<th width="25%">foto</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
		<tfoot>
			<tr>
				<th width="5%">No</th>
				<th>Nama</th>
				<th>kkal</th>
				<th>foto</th>
				<th>keterangan</th>
				<th>action</th>
			</tr>
		</tfoot>
	</table>
	<br />
</div>
</div>

<div id="modalUpdate" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update</h4>
			</div>
			<!-- modal body -->
			<div class="modal-body">
				<form enctype="multipart/form-data" class="form-horizontal form-groups-bordered" method="POST" id="formUpdate">
					<div class="form-group">
						<input class="id_olahraga" type="hidden" name="id_olahraga" id="id_olahraga">
						<label class="col-sm-3" for="nama">Nama</label>
						<div class="col-sm-8">	
							<input class="form-control nama_olahraga" type="text" name="nama_olahraga" id="nama_olahraga">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Kalori / menit</label>						
						<div class="col-sm-8">							
							<input class="form-control kkal" type="text" class="form-control" data-mask="decimal" data-numeric="true" data-numeric-align="right" placeholder="Kalori / menit" name="kkal" id="kkal" required/>
						</div>
					</div>

					<div class="form-group">							
						<label class="col-sm-3">Keterangan</label>						
						<div class="col-sm-8">
							<input type="text" class="form-control keterangan" id="keterangan" name="keterangan" placeholder="Keterangan" required>
						</div>
						<br>
					</div>

					<div class="form-group">
						<label class="col-sm-3">Foto</label>					
						<div class="col-sm-8">
							<input type="file" class="form-control" id="foto" name="foto" placeholder="Input File Foto">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8"></div>
						<div class="col-sm-2">
							<button type="button" class="btn btn-primary text-left edit" action="">Update</button>
						</div>				
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" onclick="">Close</button>
					</div>
				</form>
			</div>
			<!-- end modal body -->
		</div>
	</div>
</div>
<!-- end modal update -->

<!-- modal delete -->
<div class="modal fade" id="modalDelete" role="dialog">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
           </div>
           <div class="modal-body">

               <div class="text-delete"></div>

           </div>
           <div class="modal-footer">
               <form method="post">
                   <!-- <input class="id_olahraga" type="text" name="id_olahraga"> -->
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-danger delete">Delete</button>
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
<script src="<?php echo base_url();?>assets/js/jquery.inputmask.bundle.js"></script>

<script type="text/javascript">
	var table = $("table#tableOlg");
	var dt_table = table.DataTable();
	var modalEdit = $("#modalUpdate");
	var modalTambah = $("#modalTambah");
	var modalDelete = $("#modalDelete");
	var formTambah = modalTambah.find("form");
	var formUpdate = modalEdit.find("form");

	function run_table() {
		dt_table.clear();
		run_ajax(base_url+"Olahraga", {method:"get_olahraga"}, function (result) {
			// console.log(data);
			var data_arr = [];
			result.data.forEach(function (row, i) {
				console.log(row);
				row.foto = "<img src='"+row.foto+"' width='100%'>";
				var val = [];
				val [0] = i+1;
				val [1] = row.nama_olahraga;
				val [2] = row.kkal;
				val [3] = row.keterangan;
				val [4] = row.foto;
				val [5] = "<button type='button' style='margin-bottom: 5px;' class='btn btn-success tombol' data-toggle='modal' data-target='#modalUpdate' data-id_olahraga='"+row.id_olahraga+"' data-nama_olahraga='"+row.nama_olahraga+"' data-kkal='"+row.kkal+"' data-keterangan='"+row.keterangan+"' ><span class='glyphicon glyphicon-pencil'></span></button>"+
				"&nbsp<button type='button' style='margin-bottom: 5px;' class='btn btn-success tombol delete' data-toggle='modal' data-target='#modalDelete' data-id_olahraga='"+row.id_olahraga+"' data-nama_olahraga='"+row.nama_olahraga+"'><span class='glyphicon glyphicon-trash'></span></button>"
				data_arr[i] = val;
			});
			dt_table.rows.add(data_arr);
			dt_table.draw();
		});
	}
	run_table();
	var dataUpdate = {};

	$(document).on("click", '.tombol', function(e){
		var id_olahraga = $(this).data('id_olahraga');
		var nama_olahraga = $(this).data('nama_olahraga');
		var kkal = $(this).data('kkal');
		var keterangan = $(this).data('keterangan');
		var foto = $(this).data('foto');

		$(".id_olahraga").val(id_olahraga);
		$(".nama_olahraga").val(nama_olahraga);
		$(".kkal").val(kkal);
		$(".keterangan").val(keterangan);
		$(".foto").val(foto);

		dataUpdate.nama_olahraga =  nama_olahraga;
		$(".text-delete").text("Apakah anda yakin akan menghapus data dengan nama " + nama_olahraga + "?");
	});
	
	$('button.tambah').on("click", function(e){
		var newForm = new FormData();
		newForm.append("method", "insert");
		newForm.append("id_olahraga", $('#formTambah').find("input#id_olahraga").val());
		newForm.append("nama_olahraga", $('#formTambah').find("input#nama_olahraga").val());
		newForm.append("kkal", $('#formTambah').find("input#kkal").val());
		newForm.append("keterangan", $('#formTambah').find("input#keterangan").val());
		$.each($("input#foto"), function(i, obj) {
	        $.each(obj.files,function(j, file){
	            newForm.append('foto', file);
	        });
		});
		$.ajax({
			url:base_url+"Olahraga",
	        type: "POST",
	        data: newForm,			//inisialisasi data dari FormData(newForm)
			processData: false,
			contentType: false,
	        dataType: "JSON",
	        success: function(result)
	        {
	        console.log(result);
	        if (result.code == 200) {
	        	modalTambah.modal('hide');
				location.reload();
				run_table();
	        	} else {
	        		alert(result.message);
	        	}
	        }
		});
		return false;
	});

	$('button.edit').on("click", function(e){
		var newForm = new FormData();
		if (dataUpdate.nama_olahraga != $('#formUpdate').find("input#nama_olahraga").val()) {
			newForm.append("nama_olahraga", $('#formUpdate').find("input#nama_olahraga").val());	
		}
		newForm.append("method", "update");
		newForm.append("id_olahraga", $('#formUpdate').find("input#id_olahraga").val());
		//newForm.append("nama_olahraga", $('#formUpdate').find("input#nama_olahraga").val());
		newForm.append("kkal", $('#formUpdate').find("input#kkal").val());
		newForm.append("keterangan", $('#formUpdate').find("input#keterangan").val());
		$.each($("input#foto"), function(i, obj) {
	        $.each(obj.files,function(j, file){
	            newForm.append('foto', file);
	        });
		});
		$.ajax({
			url:base_url+"Olahraga",
	        type: "POST",
	        data: newForm,			//inisialisasi data dari FormData(newForm)
			processData: false,
			contentType: false,
	        dataType: "JSON",
	        success: function(result){
	        console.log(result);
	        if (result.code == 200) {
	        	modalEdit.modal('hide');
				// location.reload();
				run_table();
	        	} else {
	        		alert(result.message);
	        	}
	        }
		});
		return false;
	});

	// $('button.edit').on("click", function(e){
	// 	var data = formUpdate.serialize();
	// 	data += "&method=update&foto=";
	// 	console.log(data);
	// 	run_ajax(base_url+"Olahraga", data, function (result) {
	// 		console.log(result);
	// 	});
	// 	modalEdit.modal('hide');
	// 	dt_table.clear();
	// 	location.reload();
	// 	run_table();
	// });

	$('button.delete').on("click", function(e){
		run_ajax(base_url+"Olahraga", {method:"delete", id_olahraga:$(".id_olahraga").val()}, function (result) {
			console.log(result);
		});
		modalDelete.modal('hide');
		//location.reload();
		run_table();
	});	
</script>