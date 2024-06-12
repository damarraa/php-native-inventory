 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?>
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Toner
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=stok"> Toner </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stok/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat id transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(kode_barang,3) as kode FROM sb_stok_barang
                                                ORDER BY kode_barang DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil kode_barang : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode_barang
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat kode_barang
              $buat_id   = str_pad($kode, 3, "0", STR_PAD_LEFT);
              $kode_barang = "TNR$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_barang" value="<?php echo $kode_barang; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipe Printer</label>
                <div class="col-sm-5">
                  <?php 
                    $query_select = mysqli_query($mysqli, "SELECT tipe_printer FROM sb_stok_barang ORDER BY kode_barang ASC");
                  ?>
                  <select class="chosen-select" name="tipe_printer" data-placeholder="-- Pilih Barang --" autocomplete="off" required>
                  <?php 
                    while ($s = mysqli_fetch_array($query_select)) {
                  ?>

                    <option><?php echo $s['tipe_printer'] ;?></option>
                  <?php  
                    };
                  ?>
                    <!-- <option value=""></option>
                    <option value="Epson EcoTank L6270">Epson EcoTank L6270</option>
                    <option value="Epson LQ-2180">Epson LQ-2180</option>
                    <option value="Epson L310">Epson L310</option>
                    <option value="HP Deskjet 3835">HP Deskjet 3835</option>
                    <option value="HP LaserJet Pro 200">HP LaserJet Pro 200</option>
                    <option value="HP LaserJet Pro M1536dnf">HP LaserJet Pro M1536dnf</option>
                    <option value="HP OfficeJet 200">HP OfficeJet 250</option>
                    <option value="HP PageWide Enterprise 556">HP PageWide Enterprise 556</option>
                    <option value="HP PageWide 477dw">HP PageWide 477dw</option> -->
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Barang</label>
                <div class="col-sm-5">
                  <?php 
                    $query_toner = mysqli_query($mysqli, "SELECT nama_barang FROM sb_stok_barang ORDER BY kode_barang ASC");
                  ?>
                  <select class="chosen-select" name="nama_barang" data-placeholder="-- Pilih Barang --" autocomplete="off" required>
                  <?php 
                    while ($t = mysqli_fetch_array($query_toner)) {
                  ?>
                      <option><?php echo $t['nama_barang'] ;?></option>
                  <?php 
                    };
                  ?>
                    <!-- <optgroup label="Epson EcoTank L6270">
                      <option value="001 B">001 Black</option>
                      <option value="001 C">001 Cyan</option>
                      <option value="001 Y">001 Yellow</option>
                      <option value="001 B">001 Magenta</option>
                    </optgroup>
                    <optgroup label="Epson LQ-2180">
                      <option value="2180 B">2180 Black</option>
                    </optgroup>
                    <optgroup label="Epson L310">
                      <option value="003 B">003 Black</option>
                      <option value="003 C">003 Cyan</option>
                      <option value="003 Y">003 Yellow</option>
                      <option value="003 M">003 Magenta</option>
                    </optgroup>
                    <optgroup label="HP Deskjet 3835">
                      <option value="680 B">680 Black</option>
                      <option value="680 C">680 Color</option>
                    </optgroup>
                    <optgroup label="HP LaserJet Pro 200">
                      <option value="131A B">131A Black</option>
                      <option value="131A C">131A Cyan</option>
                      <option value="131A Y">131A Yellow</option>
                      <option value="131A M">131A Magenta</option>
                    </optgroup>
                    <optgroup label="HP LaserJet Pro M1536dnf">
                      <option value="78A B">78A Black</option>
                    </optgroup>
                    <optgroup label="HP OfficeJet 250">
                      <option value="62 B">62 Black</option>
                      <option value="62 C">62 Color</option>
                    </optgroup>
                    <optgroup label="HP PageWide 477dw">
                      <option value="975X B">975X Black</option>
                      <option value="975X C">975X Cyan</option>
                      <option value="975X Y">975X Yellow</option>
                      <option value="975X M">975X Magenta</option>
                    </optgroup>
                    <optgroup label="HP PageWide Enterprise 556">
                      <option value="981 B">981 Black</option>
                      <option value="981 C">981 Cyan</option>
                      <option value="981 Y">981 Yellow</option>
                      <option value="981 M">981 Magenta</option>
                    </optgroup> -->
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="satuan" value="Pcs" readonly required>
                  <!-- <select class="chosen-select" name="satuan" required>
                    <option value=""></option>
                    <option value="Pcs" selected>Pcs</option>
                  </select> -->
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=stok" class="btn btn-default btn-reset">Batal</a>
                  <a href="?module=form_stokv2&form=add" class="btn btn-warning" style="margin-top: 7px; margin-left: 12px">Input Manual</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel stok
      $query = mysqli_query($mysqli, "SELECT kode_barang,tipe_printer,nama_barang,satuan FROM sb_stok_barang WHERE kode_barang='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data stok : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form edit data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Ubah Toner
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=stok"> Toner </a></li>
      <li class="active"> Ubah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stok/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_barang" value="<?php echo $data['kode_barang']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipe Printer</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipe_printer" autocomplete="off" value="<?php echo $data['tipe_printer']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_barang" autocomplete="off" value="<?php echo $data['nama_barang']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="satuan" value="Pcs" readonly required>
                </div>
              </div>

            </div><!-- /.box body -->
            
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=stok" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>