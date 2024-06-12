<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Laporan Data Stok

    <a class="btn btn-primary btn-social pull-right" style="background-color: #0C2841;" href="modules/lap-stok/cetak.php" target="_blank">
      <i class="fa fa-print"></i> Cetak
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel stok -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode Barang</th>
                <th class="center">Tipe Printer</th>
                <th class="center">Nama Barang</th>
                <th class="center">Stok</th>
                <th class="center">Satuan</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel stok
            $query = mysqli_query($mysqli, "SELECT kode_barang,tipe_printer,nama_barang,satuan,stok FROM sb_stok_barang ORDER BY nama_barang ASC")
                                            or die('Ada kesalahan pada query tampil Data Stok: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              // $harga_beli = format_rupiah($data['harga_beli']);
              // $harga_jual = format_rupiah($data['harga_jual']);
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[kode_barang]</td>
                      <td width='180'>$data[tipe_printer]</td>
                      <td width='180'>$data[nama_barang]</td>
                      <td width='80' align='right'>$data[stok]</td>
                      <td width='80' class='center'>$data[satuan]</td>
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