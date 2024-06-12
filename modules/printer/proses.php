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
            $kode_barang  = mysqli_real_escape_string($mysqli, trim($_POST['kode_barang']));
            $tipe_printer  = mysqli_real_escape_string($mysqli, trim($_POST['tipe_printer']));
            $nama_barang  = mysqli_real_escape_string($mysqli, trim($_POST['nama_barang']));
            $created_user = $_SESSION['id_user'];

            // perintah query untuk menyimpan data ke tabel stok
            $query = mysqli_query($mysqli, "INSERT INTO sb_stok_barang(kode_barang,tipe_printer,nama_barang,satuan,created_user,updated_user) 
                                            VALUES('$kode_barang','$tipe_printer','$nama_barang','$satuan','$created_user','$created_user')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil simpan data
                header("location: ../../main.php?module=stok&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['kode_barang'])) {
                // ambil data hasil submit dari form
                $kode_barang       = mysqli_real_escape_string($mysqli, trim($_POST['kode_barang']));
                $tipe_printer       = mysqli_real_escape_string($mysqli, trim($_POST['tipe_printer']));
                $nama_barang       = mysqli_real_escape_string($mysqli, trim($_POST['nama_barang']));
                $satuan          = mysqli_real_escape_string($mysqli, trim($_POST['satuan']));
                $updated_user = $_SESSION['id_user'];

                // perintah query untuk mengubah data pada tabel stok
                $query = mysqli_query($mysqli, "UPDATE sb_stok_barang SET   tipe_printer    = '$tipe_printer',
                                                                            nama_barang     = '$nama_barang',
                                                                            satuan          = '$satuan',
                                                                            updated_user    = '$updated_user'
                                                                    WHERE   kode_barang     = '$kode_barang'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                // cek query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil update data
                    header("location: ../../main.php?module=stok&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $kode_barang = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel stok
            $query = mysqli_query($mysqli, "DELETE FROM sb_stok_barang WHERE kode_barang='$kode_barang'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=stok&alert=3");
            }
        }
    }       
}       
?>