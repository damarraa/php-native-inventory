<?php
$koneksi = mysqli_connect("localhost", "root", "", "stokbarang")
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

    <!-- Grafik Jumlah Stok Masuk & Keluar -->
    <!-- Start Donut Chart -->
    <div class="row">
      <div class="col-lg-4 col-xs-5">
      <div class="small-box" style="box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); background-color: #ffffff; border-radius: 5px;">
          <div class="inner">
            <?php include "pieChart.php"?>
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

    <!-- Small boxes (Start box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-8" style="margin-left: 15px; padding-right: 120px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#4A4D51" class="small-box">
          <div class="inner">
            <?php  
            // fungsi query untuk menampilkan data dari tabel stok
            $query = mysqli_query($mysqli, "SELECT COUNT(kode_barang) as jumlah FROM sb_stok_barang")
                                            or die('Ada kesalahan pada query tampil Data Stok: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Data Stok Toner</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 25px; padding: 13px 14px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 35px; line-height: 0;">
            <i class="fa fa-folder"></i>
          </div>
          <?php  
          if ($_SESSION['hak_akses']!='Manajer') { ?>
            <a href="?module=form_stok&form=add" class="small-box-footer" style="background-color: #0C2841;" title="Tambah Data" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-xs-8" style="margin-left: -110px; padding-right: 120px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#2D6322" class="small-box">
          <div class="inner">
            <?php   
            // fungsi query untuk menampilkan data dari tabel stok masuk
            $query = mysqli_query($mysqli, "SELECT COUNT(id_masuk) as jumlah FROM sb_barang_masuk")
                                            or die('Ada kesalahan pada query tampil Data stok Masuk: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Stok Masuk</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 30px; padding: 10px 10px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 45px; line-height: 0; box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); ">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['hak_akses']!='Manajer') { ?>
            <a href="?module=form_stok_masuk&form=add" class="small-box-footer" style="background-color: #0C2841;" title="Tambah Data" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-xs-6" style="margin-left: -110px; padding-right: 120px; border-radius: 5px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#A32E37" class="small-box">
          <div class="inner">
            <?php   
            // fungsi query untuk menampilkan data dari tabel barang keluar
            $query = mysqli_query($mysqli, "SELECT COUNT(id_keluar) as jumlah FROM sb_barang_keluar")
                                            or die('Ada kesalahan pada query tampil Data Barang Keluar: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Stok Keluar</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 30px; padding: 10px 13px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 45px; line-height: 0;">
            <i class="fa fa-sign-out"></i>
          </div>
          <?php  
          if ($_SESSION['hak_akses']!='Manajer') { ?>
            <a href="?module=form_stok_keluar&form=add" class="small-box-footer" style="background-color: #0C2841;" title="Tambah Data" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-xs-6" style="margin-left: 15px; padding-right: 120px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#4A4D51" class="small-box">
          <div class="inner">
            <?php  
            // fungsi query untuk menampilkan data dari tabel stok
            $query = mysqli_query($mysqli, "SELECT COUNT(kode_barang) as jumlah FROM sb_stok_barang")
                                            or die('Ada kesalahan pada query tampil Data stok: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Laporan Stok</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 28px; padding: 10px 14px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 45px; line-height: 0;">
            <i class="fa fa-file-text-o"></i>
          </div>
          <a href="?module=lap_stok" class="small-box-footer" style="background-color: #0C2841;" title="Cetak Laporan" data-toggle="tooltip"><i class="fa fa-print"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-xs-6" style="margin-left: -110px; padding-right: 120px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#2D6322" class="small-box">
          <div class="inner">
            <?php   
            // fungsi query untuk menampilkan data dari tabel stok masuk
            $query = mysqli_query($mysqli, "SELECT COUNT(id_masuk) as jumlah FROM sb_barang_masuk")
                                            or die('Ada kesalahan pada query tampil Data stok Masuk: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Lap. Stok Masuk</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 26px; padding: 12px 12px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 45px; line-height: 0;">
            <i class="fa fa-clone"></i>
          </div>
          <a href="?module=lap_stok_masuk" class="small-box-footer" style="background-color: #0C2841;" title="Cetak Laporan" data-toggle="tooltip"><i class="fa fa-print"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-4 col-xs-6" style="margin-left: -110px; padding-right: 120px;">
        <!-- small box -->
        <div style="background-color:#ffffff;color:#A32E37" class="small-box">
          <div class="inner">
            <?php   
            // fungsi query untuk menampilkan data dari tabel stok masuk
            $query = mysqli_query($mysqli, "SELECT COUNT(id_masuk) as jumlah FROM sb_barang_masuk")
                                            or die('Ada kesalahan pada query tampil Data stok Masuk: '.mysqli_error($mysqli));

            // tampilkan data
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['jumlah']; ?></h3>
            <p>Lap. Stok Keluar</p>
          </div>
          <div class="icon" style="color: #ffffff; font-size: 26px; padding: 12px 12px; border-radius: 180px; background:#315D85; height:50px; width: 50px; margin-top: 45px; line-height: 0;">
            <i class="fa fa-clone"></i>
          </div>
          <a href="?module=lap_stok_keluar" class="small-box-footer" style="background-color: #0C2841;" title="Cetak Laporan" data-toggle="tooltip"><i class="fa fa-print"></i></a>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" 
  integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>