<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-sign-out icon-title"></i> Data Stok Multimedia Keluar

    <a class="btn btn-primary btn-social pull-right" href="?module=form_multimedia_keluar&form=add" title="Tambah Data" data-toggle="tooltip" style="background-color: #0C2841;">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data stok keluar berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i>Sukses!</h4>
              Data stok multimedia keluar berhasil disimpan.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel stok -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode keluar</th>
                <th class="center">Tanggal keluar</th>
                <th class="center">Referensi ticket</th>
                <th class="center">Kode Barang</th>
                <th class="center">Nama Barang</th>
                <th class="center">Jumlah</th>
                <th class="center">Satuan</th>
                <th class="center">Penerima</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel stok
            $query = mysqli_query($mysqli, "SELECT a.id_keluar,a.tanggal_keluar,a.ref_ticket,a.kode_multimedia,a.jumlah,a.penerima,b.kode_multimedia,b.nama_multimedia,b.satuan
                                            FROM sb_multimedia_keluar as a INNER JOIN sb_stok_multimedia as b ON a.kode_multimedia=b.kode_multimedia ORDER BY id_keluar DESC")
                                            or die('Ada kesalahan pada query tampil Data stok keluar: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              $tanggal         = $data['tanggal_keluar'];
              $exp             = explode('-',$tanggal);
              $tanggal_keluar   = $exp[2]."-".$exp[1]."-".$exp[0];

              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='100' class='center'>$data[id_keluar]</td>
                      <td width='80' class='center'>$tanggal_keluar</td>
                      <td width='80' class='center'>$data[ref_ticket]</td>
                      <td width='80' class='center'>$data[kode_multimedia]</td>
                      <td width='80' class='center'>$data[nama_multimedia]</td>
                      <td width='80' class='center'>$data[jumlah]</td>
                      <td width='80' class='center'>$data[satuan]</td>
                      <td width='80' class='center'>$data[penerima]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content