<?php  
include 'conn/koneksi.php';
?>

<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')" onclick="location.href = 'index.html';" >
            <div class="carousel-caption d-none d-md-block">
              <h3>First Event</h3>
              <p>Clik in Image to Detail</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4" style="text-align: center;">Welcome to EO Event & Business</h1>

    
      <!-- Portfolio Section -->
      <h2>This Our Event</h2>

      <div class="row">
         <?php
                  $query = "SELECT * FROM tbl_event";
                  $sql = mysqli_query($konek, $query);
                  $total = mysqli_num_rows($sql);

                  while ($data=mysqli_fetch_array($sql)) {
                ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h2 class="card-title">
                <a href="?page=detail_event&judul=<?php echo $data['judul_event']; ?>" ><?php echo $data['judul_event'];  ?></a>
              </h2>
              <p class="card-text"><em>Lokasi at</em> <?php echo $data['alamat_venue'];  ?><br></p>
            </div>
          </div>
        </div>
        <?php } ?>
        
        
        
        
        
      </div>
      <!-- /.row -->

      

      

    </div>
    <!-- /.container -->