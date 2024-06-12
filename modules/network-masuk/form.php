<script type="text/javascript">
  function tampil_barang(input){
    var num = input.value;

    $.post("modules/network-masuk/stok.php", {
      dataidbarang: num,
    }, function(response) {      
      $('#stok').html(response)

      document.getElementById('jumlah').focus();
    });
  }

  function cek_jumlah(input) {
    jml = document.formBarangMasuk.jumlah.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }

  function hitung_total_stok() {
    bil1 = document.formBarangMasuk.stok.value;
    bil2 = document.formBarangMasuk.jumlah.value;

    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var hasil = eval(bil1) + eval(bil2);
    }

    document.formBarangMasuk.total_stok.value = (hasil);
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
      <i class="fa fa-edit icon-title"></i> Input Barang Network Masuk
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=network_masuk"> Stok Masuk Network </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/network-masuk/proses.php?act=insert" method="POST" name="formBarangMasuk">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat kode transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(id_masuk,3) as kode FROM sb_network_masuk
                                                ORDER BY id_masuk DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil id_masuk : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode transaksi
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat id_network_masuk
              $tahun          = date("Y");
              $buat_id        = str_pad($kode, 3, "0", STR_PAD_LEFT);
              $id_masuk = "NET-$tahun-$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Kode Masuk Network</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_masuk" value="<?php echo $id_masuk; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Masuk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_masuk" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" required>
                </div>
              </div>

              <hr>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Barang</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="kode_network" data-placeholder="-- Pilih Barang --" onchange="tampil_barang(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_stok = mysqli_query($mysqli, "SELECT kode_network, nama_network FROM sb_stok_network ORDER BY nama_network ASC")
                                                            or die('Ada kesalahan pada query tampil stok: '.mysqli_error($mysqli));
                      while ($data_stok = mysqli_fetch_assoc($query_stok)) {
                        echo"<option value=\"$data_stok[kode_network]\"> $data_stok[kode_network] | $data_stok[nama_network] </option>";
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

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=network_masuk" class="btn btn-default btn-reset">Batal</a>
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