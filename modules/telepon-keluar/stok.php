<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

if(isset($_POST['dataidbarang'])) {
	$kode_telepon = $_POST['dataidbarang'];

  // fungsi query untuk menampilkan data dari tabel stok
  $query = mysqli_query($mysqli, "SELECT kode_telepon,nama_telepon,satuan,stok FROM sb_stok_telepon WHERE kode_telepon='$kode_telepon'")
                                  or die('Ada kesalahan pada query tampil data stok: '.mysqli_error($mysqli));

  // tampilkan data
  $data = mysqli_fetch_assoc($query);

  $stok   = $data['stok'];
  $satuan = $data['satuan'];

	if($stok != '') {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stok</label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stok' name='stok' value='$stok' readonly>
                    <span class='input-group-addon'>$satuan</span>
                  </div>
                </div>
              </div>";
	} else {
		echo "<div class='form-group'>
                <label class='col-sm-2 control-label'>Stok</label>
                <div class='col-sm-5'>
                  <div class='input-group'>
                    <input type='text' class='form-control' id='stok' name='stok' value='Stok toner tidak ditemukan' readonly>
                    <span class='input-group-addon'>Satuan toner tidak ditemukan</span>
                  </div>
                </div>
              </div>";
	}		
}
?> 