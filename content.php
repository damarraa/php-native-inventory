<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil file fungsi tambahan */
require_once "config/fungsi_tanggal.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan message = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module'] == 'beranda') {
		include "modules/beranda/view.php";
	}
	// -----------------------------------------------------------------------------
	// HALAMAN DATA STOK MULTIMEDIA
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok multimedia, panggil file view stok multimedia
	elseif ($_GET['module'] == 'stok_multimedia') {
		include "modules/stok-multimedia/view.php";
	}

	// jika halaman konten yang dipilih form stok multimedia, panggil file from stok multimedia
	elseif ($_GET['module'] == 'form_stok_multimedia') {
		include "modules/stok-multimedia/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN DATA STOK NETWORK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok network, panggil file view stok network
	elseif ($_GET['module'] == 'stok_network') {
		include "modules/stok-network/view.php";
	}
	
	// jika halaman konten yang dipilih form stok network, panggil file form stok network
	elseif ($_GET['module'] == 'form_stok_network') {
		include "modules/stok-network/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN DATA STOK TELEPON
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok telepon, panggil file view stok telepon
	elseif ($_GET['module'] == 'stok_telepon') {
		include "modules/stok-telepon/view.php";
	}

	// jika halaman konten yang dipilih form stok telepon, panggil file form stok telepon
	elseif ($_GET['module'] == 'form_stok_telepon') {
		include "modules/stok-telepon/form.php";
	}
	// -----------------------------------------------------------------------------

	
	// -----------------------------------------------------------------------------
	// HALAMAN DATA STOK TONER DAN PRINTER MANUAK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih printer, panggil file view printer
	elseif ($_GET['module'] == 'stokv2') {
		include "modules/stokv2/view.php";
	}
	// jika halaman konten yang dipilih form stok toner, panggil file form stok toner
	elseif ($_GET['module'] == 'form_stokv2') {
		include "modules/stokv2/form.php";
	}
	// -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN DATA STOK TONER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok toner, panggil file view stok toner
	elseif ($_GET['module'] == 'stok') {
		include "modules/stok/view.php";
	}

	// jika halaman konten yang dipilih form stok toner, panggil file form stok toner
	elseif ($_GET['module'] == 'form_stok') {
		include "modules/stok/form.php";
	}
	// -----------------------------------------------------------------------------
	
	// *****************************************************************************
	
	// -----------------------------------------------------------------------------
	// HALAMAN STOK MASUK MULTIMEDIA
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok masuk multimedia, panggil file view stok masuk multimedia
	elseif ($_GET['module'] == 'multimedia_masuk') {
		include "modules/multimedia-masuk/view.php";
	}

	// jika halaman konten yang dipilih form stok masuk multimedia, panggil file form stok masuk multimedia
	elseif ($_GET['module'] == 'form_multimedia_masuk') {
		include "modules/multimedia-masuk/form.php";
	}
	// -----------------------------------------------------------------------------
	

	// -----------------------------------------------------------------------------
	// HALAMAN STOK MASUK NETWORK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok masuk network, panggil file view stok masuk network
	elseif ($_GET['module'] == 'network_masuk') {
		include "modules/network-masuk/view.php";
	}

	// jika halaman konten yang dipilih form stok masuk network, panggil file form stok masuk network
	elseif ($_GET['module'] == 'form_network_masuk') {
		include "modules/network-masuk/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN STOK MASUK TELEPON
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok masuk telepon, panggil file view stok masuk telepon
	elseif ($_GET['module'] == 'telepon_masuk') {
		include "modules/telepon-masuk/view.php";
	}

	// jika halaman konten yang dipilih form stok masuk telepon, panggil file form stok masuk telepon
	elseif ($_GET['module'] == 'form_telepon_masuk') {
		include "modules/telepon-masuk/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN STOK MASUK TONER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok masuk toner, panggil file view stok masuk toner
	elseif ($_GET['module'] == 'stok_masuk') {
		include "modules/stok-masuk/view.php";
	}
	
	// jika halaman konten yang dipilih form stok masuk toner, panggil file form stok masuk toner
	elseif ($_GET['module'] == 'form_stok_masuk') {
		include "modules/stok-masuk/form.php";
	}
	// -----------------------------------------------------------------------------
	

	// -----------------------------------------------------------------------------
	// HALAMAN STOK KELUAR MULTIMEDIA
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok keluar multimedia, panggil file view stok keluar multimedia
	elseif ($_GET['module'] == 'multimedia_keluar') {
		include "modules/multimedia-keluar/view.php";
	}

	// jika halaman konten yang dipilih form stok keluar multimedia, panggil file form stok keluar multimedia
	elseif ($_GET['module'] == 'form_multimedia_keluar') {
		include "modules/multimedia-keluar/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN STOK KELUAR NETWORK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok keluar network, panggil file view stok keluar network
	elseif ($_GET['module'] == 'network_keluar') {
		include "modules/network-keluar/view.php";
	}

	// jika halaman konten yang dipilih form stok keluar network, panggil file form stok keluar network
	elseif ($_GET['module'] == 'form_network_keluar') {
		include "modules/network-keluar/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN STOK KELUAR TELEPON
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok keluar telepon, panggil file view stok keluar telepon
	elseif ($_GET['module'] == 'telepon_keluar') {
		include "modules/telepon-keluar/view.php";
	}

	// jika halaman konten yang dipilih form stok keluar telepon, panggil file form stok keluar telepon
	elseif ($_GET['module'] == 'form_telepon_keluar') {
		include "modules/telepon-keluar/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN STOK KELUAR TONER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih stok keluar toner, panggil file view stok keluar toner
	elseif ($_GET['module'] == 'stok_keluar') {
		include "modules/stok-keluar/view.php";
	}

	// jika halaman konten yang dipilih form stok keluar toner, panggil file form stok keluar toner
	elseif ($_GET['module'] == 'form_stok_keluar') {
		include "modules/stok-keluar/form.php";
	}
	// -----------------------------------------------------------------------------
	

	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK MULTIMEDIA
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok multimedia, panggil file laporan stok multimedia
	elseif ($_GET['module'] == 'lap_stok_multimedia') {
		include "modules/lap-stok-multimedia/view.php";
	}
	// -----------------------------------------------------------------------------
	

	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK NETWORK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok network, panggil file laporan stok network
	elseif ($_GET['module'] == 'lap_stok_network') {
		include "modules/lap-stok-network/view.php";
	}
	// -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK TELEPON
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok telepon, panggil file laporan stok telepon
	elseif ($_GET['module'] == 'lap_stok_telepon') {
		include "modules/lap-stok-telepon/view.php";
	}
	// -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK TONER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok, panggil file view laporan stok
	elseif ($_GET['module'] == 'lap_stok') {
		include "modules/lap-stok/view.php";
	}
	// -----------------------------------------------------------------------------
	
	
	
	// // -----------------------------------------------------------------------------
	// // HALAMAN LAPORAN STOK MASUK MULTIMEDIA
	// // -----------------------------------------------------------------------------
	// // jika halaman konten yang dipilih laporan stok masuk multimedia, panggil view laporan stok masuk multimedia
	// elseif ($_GET['module'] == 'lap_multimedia_masuk') {
	// 	include "modules/lap-multimedia-masuk/view.php";
	// }
	// // -----------------------------------------------------------------------------
	
	
	// // -----------------------------------------------------------------------------
	// // HALAMAN LAPORAN STOK MASUK NETWORK
	// // -----------------------------------------------------------------------------
	// // jika halaman konten yang dipilih laporan stok masuk network, panggil view laporan stok masuk network
	// elseif ($_GET['module'] == 'lap_network_masuk') {
	// 	include "modules/lap-network-masuk/view.php";
	// }
	// // -----------------------------------------------------------------------------
	
	
	// // -----------------------------------------------------------------------------
	// // HALAMAN LAPORAN STOK MASUK TELEPON
	// // -----------------------------------------------------------------------------
	// // jika halaman konten yang dipilih laporan stok masuk telepon, panggil view laporan stok masuk telepon
	// elseif ($_GET['module'] == 'lap_telepon_masuk') {
	// 	include "modules/lap-telepon-masuk/view.php";
	// }
	// // -----------------------------------------------------------------------------


	// // -----------------------------------------------------------------------------
	// // HALAMAN LAPORAN STOK MASUK TONER
	// // -----------------------------------------------------------------------------
	// // jika halaman konten yang dipilih laporan stok masuk, panggil file view laporan stok masuk
	// elseif ($_GET['module'] == 'lap_stok_masuk') {
	// 	include "modules/lap-stok-masuk/view.php";
	// }
	// // -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK KELUAR MULTIMEDIA
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok keluar multimedia, panggil file view laporan stok keluar multimedia
	elseif ($_GET['module'] == 'lap_multimedia_keluar') {
		include "modules/lap-multimedia-keluar/view.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK KELUAR NETWORK
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok keluar network, panggil file view laporan stok keluar network
	elseif ($_GET['module'] == 'lap_network_keluar') {
		include "modules/lap-network-keluar/view.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK KELUAR TELEPON
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok keluar telepon, panggil file view laporan stok keluar telepon
	elseif ($_GET['module'] == 'lap_telepon_keluar') {
		include "modules/lap-telepon-keluar/view.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------
	// HALAMAN LAPORAN STOK KELUAR TONER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih laporan stok keluar toner, panggil file view laporan stok keluar toner
	elseif ($_GET['module'] == 'lap_stok_keluar') {
		include "modules/lap-stok-keluar/view.php";
	}
	// -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN MANAJEMEN USER
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih user, panggil file view user
	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}
	
	// jika halaman konten yang dipilih form user, panggil file form user
	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}
	// -----------------------------------------------------------------------------
	

	// -----------------------------------------------------------------------------
	// HALAMAN MANAJEMEN PROFIL
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih profil, panggil file view profil
	elseif ($_GET['module'] == 'profil') {
		include "modules/profil/view.php";
	}

	// jika halaman konten yang dipilih form profil, panggil file form profil
	elseif ($_GET['module'] == 'form_profil') {
		include "modules/profil/form.php";
	}
	// -----------------------------------------------------------------------------
	
	
	// -----------------------------------------------------------------------------
	// HALAMAN MANAJEMEN PASSWORD
	// -----------------------------------------------------------------------------
	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
	// -----------------------------------------------------------------------------
}
?>