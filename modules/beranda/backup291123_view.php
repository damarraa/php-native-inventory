<?php
$koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
if (!$koneksi) {
  die("Koneksi Database Gagal: ".mysqli_connect_error());
}

$queryjM  = $koneksi->query("SELECT id_masuk FROM sb_multimedia_masuk");
$resFmasuk    = $queryjM->num_rows;

$queryjK  = $koneksi->query("SELECT id_keluar FROM sb_multimedia_keluar");
$resFkeluar    = $queryjK->num_rows;
?>
  
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h3>
      <i class="fa fa-home icon-title"></i> Beranda
    </h3>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="jumbotron" style="background-color: #A32E37; background-image: url('assets/img/test1coba.png'); background-size: 36%; background-repeat: no-repeat; background-position: right; border-radius: 5px; height: 185px;">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
          <h3 style="margin-top: 3px; margin-left: 50px; font-size: 40px; color: #ffffff;">  
          Halo, <strong><?php echo $_SESSION['nama_user']; ?></strong>!
          </h3>
          <h4 style="margin-top: 12px; margin-left: 50px; font-size: 20px; color: #ffffff;">
            Selamat datang di Sistem Persediaan Barang Masuk dan Keluar IT RU II SPK
          </h4>
        </div>
      </div>
    </div>

    <!-- Visualisasi -->

    <!-- Grafik Jumlah Stok Network -->
    <!-- Start Horizontal Bar Chart -->
    <div class="row">
      <div class="col-lg-4 col-xs-5">
        <div class="small-box" style="box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px;">
          <div class="inner">
            <?php include "bar_horizontal.php"?>
          </div>
        </div>
      </div>
    

      <!-- Grafik Jumlah Stok Multimedia -->
      <!-- Start Pie Chart -->
    
      <div class="col-lg-4 col-xs-5" style="position: relative; left: 0px; top: 0px;">
        <div class="small-box" style="box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px; width: 300px; height: 371px;">
          <div class="inner">
            <div class="container-flex" style="display: flex; width: 285px; height: 380px;">
              <?php include "pieChart.php" ?>
            </div>
          </div>
        </div>
      </div>
    
      <!-- End Pie Chart -->

      <!-- Grafik Jumlah Stok Telepon -->
      <!-- Start Pie Chart 2 -->
   
      <div class="col-lg-4 col-xs-5" style="position: relative; left: -16px; top: 0px;">
        <div class="small-box" style="box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px; width: 300px; height: 371px;">
          <div class="inner">
            <div class="container-flex" style="display: flex; width: 280px; height: 320px;">
              <?php include "pie2Chart.php" ?>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- End Pie Chart 2 -->

    <!-- Grafik Jumlah Stok Masuk & Keluar -->
    <!-- Start Donut Chart -->
    <div class="row">
      <div class="col-lg-4 col-xs-5">
        <div class="small-box" style="box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px;">
          <div class="inner">
            <?php include "doughnutChart.php"?>
          </div>
      </div>
    </div>
    <!-- End Donut Chart -->

    <!-- Grafik Jumlah Stok Toner Per Unit/Pcs -->
    <!-- Start Bar Chart -->
    <div class="row">
      <div class="col-lg-2 col-xs-5">
      <div class="small-box" style="width: 660px; box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px;">
          <div class="inner">
            <?php include "barChart.php"?>
          </div>
      </div>
      </div>
    </div>
   <!-- End Bar Chart -->


    
  </section><!-- /.content -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" 
  integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>