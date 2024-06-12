<?php
session_start();
ob_start();
//panggil koneksi database
require_once "../../config/database.php";
//panggil koneksi plugin Html2Pdf
require __DIR__."../../../vendor/autoload.php";
//panggil koneksi function untuk format tanggal
include "../../config/fungsi_tanggal.php";

$hari_ini = date("d-m-Y");

use Spipu\Html2Pdf\Html2Pdf;

//ambil data hasil submit dari form
$tgl1       = $_GET['tgl_awal'];
$explode    = explode('-',$tgl1);
$tgl_awal   = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2       = $_GET['tgl_akhir'];
$explode    = explode('-',$tgl2);
$tgl_akhir   = $explode[2]."-".$explode[1]."-".$explode[0];

if(isset($_GET['tgl_awal'])) {
    $no = 1;
    //query untuk menampilkan data dari tabel barang masuk
    $query = mysqli_query($mysqli, "SELECT a.id_masuk,a.tanggal_masuk,a.kode_barang,a.jumlah,b.kode_barang,b.nama_barang,b.satuan
                                    FROM sb_barang_masuk as a INNER JOIN sb_stok_barang as b ON a.kode_barang=b.kode_barang
                                    WHERE a.tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.id_masuk ASC") 
                                    or die('Ada kesalahan pada query tampil Transaksi : '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}
?>

<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN DATA BARANG MASUK</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
            LAPORAN DATA BARANG MASUK 
        </div>
    <?php  
    if ($tgl_awal==$tgl_akhir) { ?>
        <div id="title-tanggal">
            Tanggal <?php echo tgl_eng_to_ind($tgl1); ?>
        </div>
    <?php
    } else { ?>
        <div id="title-tanggal">
            Tanggal <?php echo tgl_eng_to_ind($tgl1); ?> s.d. <?php echo tgl_eng_to_ind($tgl2); ?>
        </div>
    <?php
    }
    ?>
        
        <hr><br>
        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle">NO.</th>
                        <th height="20" align="center" valign="middle">ID MASUK</th>
                        <th height="20" align="center" valign="middle">TANGGAL</th>
                        <th height="20" align="center" valign="middle">KODE BARANG</th>
                        <th height="20" align="center" valign="middle">NAMA BARANG</th>
                        <th height="20" align="center" valign="middle">JUMLAH MASUK</th>
                        <th height="20" align="center" valign="middle">SATUAN</th>
                    </tr>
                </thead>
                <tbody>
<?php
    // jika data ada
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                </tr>";
    }
    // jika data tidak ada
    else {
        // tampilkan data
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggal       = $data['tanggal_masuk'];
            $exp           = explode('-',$tanggal);
            $tanggal_masuk = $exp[2]."-".$exp[1]."-".$exp[0];

            // menampilkan isi tabel dari database ke tabel di aplikasi
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='120' height='13' align='center' valign='middle'>$data[id_masuk]</td>
                        <td width='80' height='13' align='center' valign='middle'>$tanggal_masuk</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[kode_barang]</td>
                        <td style='padding-left:5px;' width='155' height='13' valign='middle'>$data[nama_barang]</td>
                        <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'>$data[jumlah]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[satuan]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>

            <div id="footer-tanggal">
                Sungai Pakning, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
            </div>
            <div id="footer-jabatan">
                Pimpinan
            </div>
            
            <div id="footer-nama">
                FULAN BIN FULAN
            </div>
        </div>
    </body>
</html>
<!-- Akhir halaman HTML yang akan di convert -->

<?php
$filename   = "LAPORAN DATA BARANG MASUK.pdf";
$content    = ob_get_clean();
$content    = '<page style="font-family: freeserif">'.($content).'</page>';

//panggil library Html2Pdf
require_once('../../assets/plugins/html2pdf/src/Html2Pdf.php');
try{
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
    $html2pdf->output($filename);
}catch(HTML2PDF_exception $e){
    echo $e;
}
?>