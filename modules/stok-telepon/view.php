<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Data Telepon

    <a class="btn btn-primary btn-social pull-right" href="?module=form_stok_telepon&form=add" title="Tambah Data" data-toggle="tooltip" style="background-color: #0C2841;">
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
    // tampilkan pesan Sukses "Data stok baru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data telepon baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data stok berhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data telepon berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data stok berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data telepon berhasil dihapus.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel stok -->
          <table id="dataTables2" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode Telepon</th>
                <th class="center">Tipe Barang</th>
                <th class="center">Nama Barang</th>
                <th class="center">Jumlah</th>
                <th class="center">Satuan</th>
                <th></th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel stok
            $query = mysqli_query($mysqli, "SELECT kode_telepon,tipe_telepon,nama_telepon,satuan,stok FROM sb_stok_telepon ORDER BY kode_telepon DESC")
                                            or die('Ada kesalahan pada query tampil Data stok: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              // $harga_beli = format_rupiah($data['harga_beli']);
              // $harga_jual = format_rupiah($data['harga_jual']);
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
  
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[kode_telepon]</td>
                      <td width='80' class='center'>$data[tipe_telepon]</td>
                      <td width='150' align='center'>$data[nama_telepon]</td>
                      <td width='80' align='center'>$data[stok]</td>
                      <td width='80' class='center'>$data[satuan]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background-color: #0C2841;' class='btn btn-primary btn-sm' href='?module=form_stok_telepon&form=edit&id=$data[kode_telepon]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" style="background-color: #A32E37;" class="btn btn-danger btn-sm" href="modules/stok-telepon/proses.php?act=delete&id=<?php echo $data['kode_telepon'];?>" onclick="return confirm('Anda yakin ingin menghapus stok <?php echo $data['nama_telepon']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
              echo "    </div>
                      </td>
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