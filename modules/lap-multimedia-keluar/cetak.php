<?php
session_start();
ob_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";
// panggil fungsi untuk format tanggal
include "../../config/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
// include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

// ambil data hasil submit dari form
$tgl1     = $_GET['tgl_awal'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

if (isset($_GET['tgl_awal'])) {
    $no    = 1;
    // fungsi query untuk menampilkan data dari tabel stok keluar
    $query = mysqli_query($mysqli, "SELECT a.id_keluar,a.tanggal_keluar,a.ref_ticket,a.kode_multimedia,a.jumlah,a.penerima,b.kode_multimedia,b.nama_multimedia,b.satuan
                                    FROM sb_multimedia_keluar as a INNER JOIN sb_stok_multimedia as b ON a.kode_multimedia=b.kode_multimedia
                                    WHERE a.tanggal_keluar BETWEEN '$tgl_awal' AND '$tgl_akhir'
                                    ORDER BY a.id_keluar ASC") 
                                    or die('Ada kesalahan pada query tampil Transaksi : '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN STOK KELUAR MULTIMEDIA</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
            LAPORAN STOK KELUAR MULTIMEDIA
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
                        <th height="20" align="center" valign="middle">KODE KELUAR</th>
                        <th height="20" align="center" valign="middle">TANGGAL</th>
                        <th height="20" align="center" valign="middle">REFERENSI TICKET</th>
                        <th height="20" align="center" valign="middle">KODE BARANG</th>
                        <th height="20" align="center" valign="middle">NAMA BARANG</th>
                        <th height="20" align="center" valign="middle">JUMLAH MASUK</th>
                        <th height="20" align="center" valign="middle">SATUAN</th>
                        <th height="20" align="center" valign="middle">PENERIMA</th>
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
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                </tr>";
    }
    // jika data tidak ada
    else {
        // tampilkan data
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggal       = $data['tanggal_keluar'];
            $exp           = explode('-',$tanggal);
            $tanggal_keluar = $exp[2]."-".$exp[1]."-".$exp[0];

            // menampilkan isi tabel dari database ke tabel di aplikasi
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[id_keluar]</td>
                        <td width='80' height='13' align='center' valign='middle'>$tanggal_keluar</td>
                        <td width='100' height='13' align='center' valign='middle'>$data[ref_ticket]</td>
                        <td width='100' height='13' align='center' valign='middle'>$data[kode_multimedia]</td>
                        <td style='padding-left:5px;' width='120' height='13' valign='middle' align='center'>$data[nama_multimedia]</td>
                        <td style='padding-right:10px;' width='100' height='13' align='right' valign='middle' align='center '>$data[jumlah]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[satuan]</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[penerima]</td>
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
                Fulan bin fulan
            </div>
        </div>
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="Laporan Data Stok Keluar Multimedia.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';
// panggil library html2pdf
require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P','F4','en', array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>