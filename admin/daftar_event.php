      <?php
        include '../conn/koneksi.php';
      ?>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Event</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode Event</th>
                  <th>Judul Event</th>
                  <th>Jam Mulai</th>
                  <th>Tanggal Tampil</th>
                  <th>Tanggal Input</th>
                  <th>Lokasi Venue</th>
                  <th>Alamat Veuue</th>
                  <th>Batas Usia Minimum</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kode Event</th>
                  <th>Judul Event</th>
                  <th>Jam Mulai</th>
                  <th>Tanggal Tampil</th>
                  <th>Tanggal Input</th>
                  <th>Lokasi Venue</th>
                  <th>Alamat Veuue</th>
                  <th>Batas Usia Minimum</th>
                </tr>
              </tfoot>
              <?php
                  $query = "SELECT * FROM tbl_event";
                  $sql = mysqli_query($konek, $query);
                  $total = mysqli_num_rows($sql);
                  $no = 1;

                  while ($data=mysqli_fetch_array($sql)) {
                ?>
              <tbody>
                <tr>
                  <td><?php echo $data['kode_event']; ?></td>
                  <td><?php echo $data['judul_event']; ?></td>
                  <td><?php echo $data['waktu_tampil']; ?></td>
                  <td><?php echo $data['tanggal_tampil_event']; ?></td>
                  <td><?php echo $data['tanggal_input_event']; ?></td>
                  <td><?php echo $data['lokasi_venue']; ?></td>
                  <td><?php echo $data['alamat_venue']; ?></td>
                  <td><?php echo $data['batas_usia']; ?></td>
                </tr>

                <?php $no++; } ?>
              </tbody>
            </table>
          </div>
        </div>
       </div>
        