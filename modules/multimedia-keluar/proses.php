<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form
            $id_keluar = mysqli_real_escape_string($mysqli, trim($_POST['id_keluar']));
            
            $tanggal        = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_keluar']));
            $exp            = explode('-',$tanggal);
            $tanggal_keluar = $exp[2]."-".$exp[1]."-".$exp[0];
            
            $kode_multimedia    = mysqli_real_escape_string($mysqli, trim($_POST['kode_multimedia']));
            $ref_ticket    = mysqli_real_escape_string($mysqli, trim($_POST['ref_ticket']));
            $jumlah         = mysqli_real_escape_string($mysqli, trim($_POST['jumlah']));
            $total_stok     = mysqli_real_escape_string($mysqli, trim($_POST['total_stok']));
            $penerima       = mysqli_real_escape_string($mysqli, trim($_POST['penerima']));
            
            $created_user    = $_SESSION['id_user'];

            // perintah query untuk menyimpan data ke tabel stok keluar
            $query = mysqli_query($mysqli, "INSERT INTO sb_multimedia_keluar(id_keluar,tanggal_keluar,ref_ticket,kode_multimedia,jumlah,penerima,created_user) 
                                            VALUES('$id_keluar','$tanggal_keluar','$ref_ticket','$kode_multimedia','$jumlah','$penerima','$created_user')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // perintah query untuk mengubah data pada tabel stok
                $query1 = mysqli_query($mysqli, "UPDATE sb_stok_multimedia SET stok        = '$total_stok'
                                                              WHERE kode_multimedia   = '$kode_multimedia'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                // cek query
                if ($query1) {                       
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: ../../main.php?module=multimedia_keluar&alert=1");
                }
            }   
        }   
    }
}       
?>