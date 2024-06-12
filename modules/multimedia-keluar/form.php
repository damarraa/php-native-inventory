<script type="text/javascript">
  function tampil_barang(input){
    var num = input.value;

    $.post("modules/multimedia-keluar/stok.php", {
      dataidbarang: num,
    }, function(response) {      
      $('#stok').html(response)

      document.getElementById('jumlah').focus();
    });
  }

  function cek_jumlah(input) {
    jml = document.formBarangKeluar.jumlah.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Keluar Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }

    stok = document.formBarangKeluar.stok.value;
    var stok_tersedia = eval(stok);

    if (jumlah > stok_tersedia) {
      alert('Jumlah stok yang akan dikeluarkan melebihi stok yang tersedia.');
      window.location.href='main.php?module=form_multimedia_keluar&form=add';
    } else {
      return "Stok bisa dikeluarkan.";
    }
  }

  function hitung_total_stok() {
    bil1 = document.formBarangKeluar.stok.value;
    bil2 = document.formBarangKeluar.jumlah.value;

    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var hasil = eval(bil1) - eval(bil2);
    }

    document.formBarangKeluar.total_stok.value = (hasil);
  }
</script>

<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Barang Multimedia Keluar
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=multimedia_keluar"> Stok Keluar Multimedia </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/multimedia-keluar/proses.php?act=insert" method="POST" name="formBarangKeluar">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat kode transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(id_keluar,3) as kode FROM sb_multimedia_keluar
                                                ORDER BY id_keluar DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil id_keluar : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode transaksi
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat id_multimedia_keluar
              $tahun          = date("Y");
              $buat_id        = str_pad($kode, 3, "0", STR_PAD_LEFT);
              $id_keluar = "OUTMULTI-$tahun-$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Barang keluar</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_keluar" value="<?php echo $id_keluar; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal keluar</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_keluar" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Referensi ticket</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ref_ticket" id="ref_ticket" required>
                </div>
              </div>
              
              <hr>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Barang</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="kode_multimedia" data-placeholder="-- Pilih Barang --" onchange="tampil_barang(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_stok = mysqli_query($mysqli, "SELECT kode_multimedia, nama_multimedia FROM sb_stok_multimedia ORDER BY nama_multimedia ASC")
                                                            or die('Ada kesalahan pada query tampil stok: '.mysqli_error($mysqli));
                      while ($data_stok = mysqli_fetch_assoc($query_stok)) {
                        echo"<option value=\"$data_stok[kode_multimedia]\"> $data_stok[kode_multimedia] | $data_stok[nama_multimedia] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
              
              <span id='stok'>
              <div class="form-group">
                <label class="col-sm-2 control-label">Stok</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stok" name="stok" readonly required>
                </div>
              </div>
              </span>

              <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="jumlah" name="jumlah" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" onkeyup="hitung_total_stok(this)&cek_jumlah(this)" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Total Stok</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="total_stok" name="total_stok" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Penerima</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="penerima" name="penerima" required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=multimedia_keluar" class="btn btn-default btn-reset">Batal</a>
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