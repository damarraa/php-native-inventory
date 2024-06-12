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
            $id_masuk = mysqli_real_escape_string($mysqli, trim($_POST['id_masuk']));
            
            $tanggal         = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_masuk']));
            $exp             = explode('-',$tanggal);
            $tanggal_masuk   = $exp[2]."-".$exp[1]."-".$exp[0];
            
            $kode_network       = mysqli_real_escape_string($mysqli, trim($_POST['kode_network']));
            $jumlah    = mysqli_real_escape_string($mysqli, trim($_POST['jumlah']));
            $total_stok      = mysqli_real_escape_string($mysqli, trim($_POST['total_stok']));
            
            $created_user    = $_SESSION['id_user'];

            // perintah query untuk menyimpan data ke tabel stok masuk
            $query = mysqli_query($mysqli, "INSERT INTO sb_network_masuk(id_masuk,tanggal_masuk,kode_network,jumlah,created_user) 
                                            VALUES('$id_masuk','$tanggal_masuk','$kode_network','$jumlah','$created_user')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // perintah query untuk mengubah data pada tabel stok
                $query1 = mysqli_query($mysqli, "UPDATE sb_stok_network SET     stok            = '$total_stok'
                                                                        WHERE   kode_network    = '$kode_network'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                // cek query
                if ($query1) {                       
                    // jika berhasil tampilkan pesan berhasil simpan data
                    header("location: ../../main.php?module=network_masuk&alert=1");
                }
            }   
        }   
    }
}       
?>