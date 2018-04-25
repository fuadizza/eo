<?php
include 'conn/koneksi.php';
$kode_event = isset($_GET['judul']) ? $_GET['judul'] : "";

$query = mysqli_query($konek,"SELECT * FROM tbl_event WHERE kode_event='$kode_event'");
$data = mysqli_fetch_array($query);

$judul = $data[1];

$query_tiket = mysqli_query($konek,"SELECT * FROM tbl_tiket WHERE kode_event='$data[0]'");
?>

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Pembelian Tiket
        <small><?php echo $judul; ?></small>
      </h1>


      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Data Pembeli</h4>
            <div class="card-body">
              <p class="card-text">
                <div class="form-group">
                <label class="control-label col-sm-8" for="nik">NIK / Passport Number:</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="nik" placeholder="Masukan NIK atau Passport Number" name="nik">
                </div>

                <div class="form-group">
                <label class="control-label col-sm-8" for="nama">Nama :</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="judul" placeholder="Masukan Nama Sesuai KTP / Passport" name="nik">
                </div>
              </div>

              <?php  ?>

              <div class="row">
       <div class="col-lg-12">
          <table class="table table-bored table-striped">
            <thead>
              <tr>
                <td>Kategori Tiket</td>
                <td>Harga Tiket</td>
                <td>Jumlah Tiket</td>
              </tr>
            </thead>
            
            <tbody>
              <?php

              $nama_tiket;
              $i = 1;

              while ($data_tiket = mysqli_fetch_array($query_tiket)) {
              ?>
              <tr>
                <th><input type="hidden" name="nama_kategori[$i]" id="nama_kategori[$i]" onkeyup="sum()" ><?php echo $data_tiket['nama_kategori']; ?></th>
                <th><input type="hidden" name="harga_tiket[$i]" id="harga_tiket[$i]" onkeyup="sum()" value="<?php echo $data_tiket['harga_tiket']; ?>">
                  <?php echo $data_tiket['harga_tiket']; ?></th>
                <th><select class="form-control" name="<?php echo $nama_tiket[$i]; ?>" id="<?php echo $nama_tiket[$i]; ?>">
                  <option value="">Jumlah Tiket</option>
                  <option value="1">1 Tiket</option>
                   <option value="2">2 Tiket</option>
                  <option value="3">3 Tiket</option>
                </select></th>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div>
      </div>
          </div>
              </p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-lg-6"><a href="#" class="btn btn-primary">Beli</a></div>
                <div class="col-lg-6"><h4 align="right" id="total"></h4></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Konfirmasi Kode Booking</h4>
            <div class="card-body">
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <script>
      function sum() {
      var hr1 = 234;
      document.getElementById('total').value = hr1;
      }
    </script>