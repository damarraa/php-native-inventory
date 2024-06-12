 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Multimedia
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=stok_multimedia"> Multimedia </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stok-multimedia/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat id transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(kode_multimedia,3) as kode FROM sb_stok_multimedia
                                                ORDER BY kode_multimedia DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil kode_multimedia : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode_barang
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat kode_multimedia
              $buat_id   = str_pad($kode, 3, "0", STR_PAD_LEFT);
              $kode_multimedia = "MULTI$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Multimedia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_multimedia" value="<?php echo $kode_multimedia; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipe Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipe_multimedia" id="tipe_multimedia" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Multimedia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_multimedia" id="nama_multimedia" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="satuan" value="Pcs" readonly required>
                  <!-- <select class="chosen-select" name="satuan" data-placeholder="-- Pilih Satuan --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="Pcs" selected>Pcs</option>
                    <option value="Roll" selected>Roll</option> -->
                  </select>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=stok_multimedia" class="btn btn-default btn-reset">Batal</a>
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
      $query = mysqli_query($mysqli, "SELECT kode_multimedia,tipe_multimedia,nama_multimedia,satuan FROM sb_stok_multimedia WHERE kode_multimedia='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data stok : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form edit data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Ubah Data Multimedia
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=stok_multimedia"> Multimedia </a></li>
      <li class="active"> Ubah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stok-multimedia/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Multimedia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_multimedia" value="<?php echo $data['kode_multimedia']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipe Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipe_multimedia" autocomplete="off" value="<?php echo $data['tipe_multimedia']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Barang</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_multimedia" autocomplete="off" value="<?php echo $data['nama_multimedia']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Satuan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="satuan" value="Pcs" readonly required>
                  <!-- <select class="chosen-select" name="satuan" data-placeholder="-- Pilih Satuan --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="Pcs" selected>Pcs</option>
                    <option value="Roll" selected>Roll</option>
                  </select> -->
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=stok_multimedia" class="btn btn-default btn-reset">Batal</a>
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