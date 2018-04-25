    <!-- Page Content -->
    <?php
    include 'conn/koneksi.php';
    $judul = isset($_GET['judul']) ? $_GET['judul'] : "";

    $query = mysqli_query($konek,"SELECT * FROM tbl_event WHERE judul_event='$judul'");

    $data = mysqli_fetch_array($query);

    $query_tiket = mysqli_query($konek,"SELECT * FROM tbl_tiket WHERE kode_event='$data[0]'");

    ?>
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo "$judul" ?>
        <small><h5><em>#Event</em></h5></small>
      </h1>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
            <table class="table table-default">
            <tbody>
              <tr>
                <td width="30%" align="right">Date Performance </td>
                <td width="2%"> : </td>
                <th><?php echo $data[4]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Time Performance </td>
                <td width="2%"> : </td>
                <th><?php echo $data[7]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Batas Usia Minilam </td>
                <td width="2%"> : </td>
                <th><?php echo $data[6]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Lokasi Venue </td>
                <td width="2%"> : </td>
                <th><?php echo $data[2]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Alamat Venue </td>
                <td width="2%"> : </td>
                <th><?php echo $data[3]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Cara Pembayaran </td>
                <td width="2%"> : </td>
                <th>Transfer Bank, Alfamart, Indomart</th>
              </tr>     
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h3>Informasi Tiket</h3>

      <div class="row">
       <div class="col-lg-12">
          <table class="table table-bored table-striped">
            <thead>
              <tr>
                <td>Kategori Tiket</td>
                <td>Harga</td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while ($data_tiket = mysqli_fetch_array($query_tiket)) {
              ?>
              <tr>
                <th><?php echo $data_tiket['nama_kategori']; ?></th>
                <th><?php echo $data_tiket['harga_tiket']; ?></th>
              </tr>
              <?php } ?>
            </tbody>
          </table>

           <a href="?page=buy_ticket&judul=<?php echo $data["0"]; ?>"><button class="btn btn-default">Beli Tiket</button></a>
        </div>
      </div>
      <!-- /.row -->

      <!-- Our Customers -->
      <h2>Support By</h2>
      <div class="row">
      <?php 
      for ($i=0; $i < 12 ; $i++) {?>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
      <?php } ?>
    </div> 
      <!-- /.row -->

    </div>
    <!-- /.container -->