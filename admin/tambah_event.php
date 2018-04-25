<?php 
	include '../conn/koneksi.php';
	$waktu = date('Y-m-d H:i:s');
	$tgl = date('Ymd');
	// Cara 1
				$sql = "SELECT count(*) AS jumlah FROM tbl_event";
				$query = mysqli_query($konek,$sql);
				$result = mysqli_fetch_array($query);
				$kode = $result['jumlah'];
				$kode++;


				$char = "KE";
				$newID = $char.$tgl.sprintf("%03s", $kode)


?>
<div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-event"></i> Tambah Data Event <?php echo $qry; ?>
  	</div>

  	<div class="card-body">
  		<form class="form-horizontal" action="?page=event_proses" method="post">
					<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
					<input type="hidden" name="kode_event" value="<?php echo $newID ?>">

					<div class="form-group">
						  <label class="control-label col-sm-4" for="kode_event">Kode Event :</label>
						  <div class="col-sm-12">
							<input type="text" class="form-control" id="kode_event" value="<?php echo $newID ?>" disabled>
						  </div>
					</div>


					<div class="form-group">
						  <label class="control-label col-sm-4" for="judul">Judul Event :</label>
						  <div class="col-sm-12">
							<input type="text" class="form-control" id="judul_event" placeholder="Judul Event" name="judul_event">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-4" for="lokasi">Lokasi Venue :</label>
						  <div class="col-sm-12">
							<input type="text" class="form-control" id="lokasi_venue" placeholder="Lokasi Venue" name="lokasi_venue">
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-4" for="alamat">Alamat Venue :</label>
						  <div class="col-sm-12">
							<input type="text" class="form-control" id="alamat_venue" placeholder="Alamat Venue" name="alamat_venue">
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-4" for="tanggal">Tanggal Tampil :</label>
						  <div class="col-sm-12">
							<input type="date" class="form-control" id="tanggal_tampil" placeholder="Tanggal Tampil" name="tanggal_tampil">
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-4" for="tanggal">Start From :</label>
						  <div class="col-sm-12">
							<input type="time" class="form-control" id="waktu_tampil" placeholder="Waktu" name="waktu_tampil">
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-4" for="lokasi">Batas Usia Minimum :</label>
						  <div class="col-sm-12">
							<input type="text" class="form-control" id="bats_usia" placeholder="Batas Usia" name="batas_usia">
						  </div>
					</div>

					 <div class="card mb-3">
					 	<div class="card-header">
					      <i class="fa fa-event"></i> Detail Tiket
					  	</div> 
					  	<div class="card-header">
					  		<div class="form-group">
								  <label class="control-label col-sm-4" for="tiket">Jenis Tiket</label>
								 	<select class="form-control" name="jumlah_tiket" id="jumlah_tiket" onchange="myfunc()">
								 		<option value="">Pilih Banyak Kategori Tiket</option>
								 		<option value="1">
								 			1
								 		</option>
								 		<option value="2">
								 			2
								 		</option>
								 		<option value="3">
								 			3
								 		</option>
								 		<option value="4">
								 			4
								 		</option>
								 		<option value="5">
								 			5
								 		</option>
								 	</select>

								 	<script type="text/javascript">
								 		function myfunc(){
								 			var jumlah=document.getElementById("jumlah_tiket").value;
								 			
								 			var p_disini = document.getElementById("disini");
		

								 			var htmle = "<table class='table table-default' id='disini'><thead><tr><th>Kategori Tiket</th><th>Harga</th><th>Jumlah Tiket</th></tr></thead><tbody>"

								 			var tampungan = ""

								 			
								 			for(i = 1; i <= jumlah; i++){

								 				var htmlei = "<tr><td><div class='col-sm-12'><input type='text' class='form-control' placeholder='Nama Kategori Tiket "+ i +"' name='nama_kategori_"+ i +"'></div></td><td><div class='col-sm-12'><input type='number' class='form-control' placeholder='Harga Tiket "+ i +"' name='harga_tiket_"+ i +"'></div></td><td><div class='col-sm-12'><input type='text' class='form-control' placeholder='Jumlah Tiket "+ i +"' name='jumlah_tiket_"+ i +"'></div></td></tr>";

								 				tampungan = tampungan + htmlei 
								 			}

								 			

								 			var tutupe = "</tbody></table>"

								 			p_disini.innerHTML =  htmle + tampungan + tutupe;

								 			

								 			

								 		}
								 	</script>

				
								 <div id="disini">
								 	
								 </div>
							</div>
					  	</div>
					 </div>
					
					
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" value="simpan" class="btn btn-default">Simpan</button>
					  </div>
					</div>
				</form>
  		
  	</div>


</div>


	


