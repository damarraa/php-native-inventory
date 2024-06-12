<?php 
// fungsi pengecekan level untuk menampilkan menu sesuai dengan hak akses
// jika hak akses = Super Admin, tampilkan menu
if ($_SESSION['hak_akses']=='Super Admin') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">

	<!-- ***** MENU DASHBOARD ***** -->
	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
		<li class="active">
			<a href="?module=beranda"><i class="fa fa-home"></i> Dashboard </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=beranda"><i class="fa fa-home"></i> Dashboard </a>
	  	</li>
	<?php
	}


	// ***** MENU DATA STOK *****
  	// jika menu Data Stok Multimedia dipilih, menu Data Stok Multimedia aktif
	if ($_GET["module"]=="stok_multimedia") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder"></i> <span>Data Barang</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=stok_multimedia"><i class="fa fa-camera"></i> Multimedia </a></li>
        		<li><a href="?module=stok_network"><i class="fa fa-sitemap"></i> Network </a></li>
        		<li><a href="?module=stok_telepon"><i class="fa fa-phone"></i> Telepon </a></li>
        		<li><a href="?module=stok"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Data Stok Network dipilih, menu Data Stok Network aktif
	elseif ($_GET["module"]=="stok_network") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder"></i> <span>Data Barang</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  	<li><a href="?module=stok_multimedia"><i class="fa fa-camera"></i> Multimedia </a></li>
        		<li class="active"><a href="?module=stok_network"><i class="fa fa-sitemap"></i> Network </a></li>
        		<li><a href="?module=stok_telepon"><i class="fa fa-phone"></i> Telepon </a></li>
        		<li><a href="?module=stok"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Data Stok Telepon dipilih, menu Data Stok Telepon aktif
	elseif ($_GET["module"]=="stok_telepon") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder"></i> <span>Data Barang</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  	<li><a href="?module=stok_multimedia"><i class="fa fa-camera"></i> Multimedia </a></li>
        		<li><a href="?module=stok_network"><i class="fa fa-sitemap"></i> Network </a></li>
        		<li class="active"><a href="?module=stok_telepon"><i class="fa fa-phone"></i> Telepon </a></li>
        		<li><a href="?module=stok"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Data Stok Toner dipilih, menu Data Stok Toner aktif
	elseif ($_GET["module"]=="stok") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-folder"></i> <span>Data Barang</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=stok_multimedia"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=stok_network"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=stok_telepon"><i class="fa fa-phone"></i> Telepon </a></li>
			<li class="active"><a href="?module=stok"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}  
	// jika menu Data Stok tidak dipilih, menu Data Stok tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-folder"></i> <span>Data Barang</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      	<ul class="treeview-menu">
			<li><a href="?module=stok_multimedia"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=stok_network"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=stok_telepon"><i class="fa fa-phone"></i> Telepon </a></li>
        	<li><a href="?module=stok"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}


	// ***** MENU STOK MASUK *****
	// jika menu Stok Multimedia dipilih, menu Stok Multimedia aktif
	if($_GET["module"]=="multimedia_masuk") { ?>
		<li class="active treeview">
			<a href="javascript:void(0);">
				<i class="fa fa-sign-in"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li class="active"><a href="?module=multimedia_masuk"><i class="fa fa-camera"></i> Multimedia </a></li>
				<li><a href="?module=network_masuk"><i class="fa fa-sitemap"></i> Network </a></li>
				<li><a href="?module=telepon_masuk"><i class="fa fa-phone"></i> Telepon </a></li>
				<li><a href="?module=stok_masuk"><i class="fa fa-print"></i> Toner </a></li>
			</ul>
		</li>
	<?php
	}
	// jika menu Stok Network dipilih, menu Stok Network aktif
	elseif ($_GET["module"]=="network_masuk") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-in"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_masuk"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li class="active"><a href="?module=network_masuk"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_masuk"><i class="fa fa-phone"></i> Telepon </a></li>
			<li><a href="?module=stok_masuk"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Telepon dipilih, menu Stok Telepon aktif
	elseif ($_GET["module"]=="telepon_masuk") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-in"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_masuk"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_masuk"><i class="fa fa-sitemap"></i> Network </a></li>
			<li class="active"><a href="?module=telepon_masuk"><i class="fa fa-phone"></i> Telepon </a></li>
			<li><a href="?module=stok_masuk"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Toner dipilih, menu Stok Toner aktif
	elseif ($_GET["module"]=="stok_masuk") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-in"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_masuk"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_masuk"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_masuk"><i class="fa fa-phone"></i> Telepon </a></li>
			<li class="active"><a href="?module=stok_masuk"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Masuk tidak dipilih, menu Stok Masuk tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-sign-in"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      	<ul class="treeview-menu">
			<li><a href="?module=multimedia_masuk"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_masuk"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_masuk"><i class="fa fa-phone"></i> Telepon </a></li>
        	<li><a href="?module=stok_masuk"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}


	// ***** MENU STOK KELUAR *****
	// jika menu Stok Multimedia dipilih, menu Stok Multimedia aktif
	if($_GET["module"]=="multimedia_keluar") { ?>
		<li class="active treeview">
			<a href="javascript:void(0);">
				<i class="fa fa-sign-out"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li class="active"><a href="?module=multimedia_keluar"><i class="fa fa-camera"></i> Multimedia </a></li>
				<li><a href="?module=network_keluar"><i class="fa fa-sitemap"></i> Network </a></li>
				<li><a href="?module=telepon_keluar"><i class="fa fa-phone"></i> Telepon </a></li>
				<li><a href="?module=stok_keluar"><i class="fa fa-print"></i> Toner </a></li>
			</ul>
		</li>
	<?php
	}
	// jika menu Stok Network dipilih, menu Stok Network aktif
	elseif ($_GET["module"]=="network_keluar") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-out"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_keluar"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li class="active"><a href="?module=network_keluar"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_keluar"><i class="fa fa-phone"></i> Telepon </a></li>
			<li><a href="?module=stok_keluar"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Telepon dipilih, menu Stok Telepon aktif
	elseif ($_GET["module"]=="telepon_keluar") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-out"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_keluar"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_keluar"><i class="fa fa-sitemap"></i> Network </a></li>
			<li class="active"><a href="?module=telepon_keluar"><i class="fa fa-phone"></i> Telepon </a></li>
			<li><a href="?module=stok_keluar"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Toner dipilih, menu Stok Toner aktif
	elseif ($_GET["module"]=="stok_keluar") { ?>
		<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-sign-out"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
		</a>
		<ul class="treeview-menu">
			<li><a href="?module=multimedia_keluar"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_keluar"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_keluar"><i class="fa fa-phone"></i> Telepon </a></li>
			<li class="active"><a href="?module=stok_keluar"><i class="fa fa-print"></i> Toner </a></li>
		</ul>
		</li>
	<?php
	}
	// jika menu Stok Keluar tidak dipilih, menu Stok Keluar tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-sign-out"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      	<ul class="treeview-menu">
			<li><a href="?module=multimedia_keluar"><i class="fa fa-camera"></i> Multimedia </a></li>
			<li><a href="?module=network_keluar"><i class="fa fa-sitemap"></i> Network </a></li>
			<li><a href="?module=telepon_keluar"><i class="fa fa-phone"></i> Telepon </a></li>
        	<li><a href="?module=stok_keluar"><i class="fa fa-print"></i> Toner </a></li>
      		</ul>
    	</li>
    <?php
	}

	// ***** MENU CETAK LAPORAN *****
	// **** BAGIAN LAPORAN STOK ****
	// jika menu Laporan Stok Multimedia dipilih, menu Laporan Stok Multimedia aktif
	if ($_GET["module"]=="lap_stok_multimedia") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Tersedia</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Network dipilih, menu Laporan Stok Network aktif
	elseif ($_GET["module"]=="lap_stok_network") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Tersedia</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Telepon dipilih, menu Laporan Stok Telepon aktif
	elseif ($_GET["module"]=="lap_stok_telepon") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Toner dipilih, menu Laporan Stok Toner aktif
	elseif ($_GET["module"]=="lap_stok") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// **** BAGIAN LAPORAN STOK MASUK ****
	// jika menu Laporan Stok Masuk Multimedia dipilih, menu Laporan Stok Masuk Multimedia aktif
	elseif ($_GET["module"]=="lap_multimedia_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Network dipilih, menu Laporan Stok Masuk Network aktif
	elseif ($_GET["module"]=="lap_network_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Telepon dipilih, menu Laporan Stok Masuk Telepon aktif
	elseif ($_GET["module"]=="lap_telepon_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Toner dipilih, menu Laporan Stok Masuk Toner aktif
	elseif ($_GET["module"]=="lap_stok_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// **** BAGIAN LAPORAN STOK KELUAR ****
	// jika menu Laporan Stok Keluar Multimedia dipilih, menu Laporan Stok Keluar Multimedia aktif
	elseif ($_GET["module"]=="lap_multimedia_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Network dipilih, menu Laporan Stok Keluar Network aktif
	elseif ($_GET["module"]=="lap_network_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Telepon dipilih, menu Laporan Stok Keluar Telepon aktif
	elseif ($_GET["module"]=="lap_telepon_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Toner dipilih, menu Laporan Stok Keluar Toner aktif
	elseif ($_GET["module"]=="lap_stok_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_masuk_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_masuk_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_masuk_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Stok Keluar tidak dipilih, menu Stok Keluar tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
			  <ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_masuk_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_masuk_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_masuk_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}

	
	// ***** MENU MANAJEMEN USER *****
	// jika menu user dipilih, menu user aktif
	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Manajemen User</a>
	  	</li>
	<?php
	}
	// jika tidak, menu user tidak aktif
	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Manajemen User </a>
	  	</li>
	<?php
	}

	// jika menu ubah password dipilih, menu ubah password aktif
	
  // if ($_GET["module"]=="password") { ?>
		<!-- <li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li> -->
	<?php
	// }
	// jika tidak, menu ubah password tidak aktif
	// else { ?>
		<!-- <li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li> -->
	<?php
	// }
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}



// --------------------------------------------------
// ***** Sidebar Beda User *****
// --------------------------------------------------
// jika hak akses = User, tampilkan menu
elseif ($_SESSION['hak_akses']=='User') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">

	<!-- ***** MENU DASHBOARD ***** -->
	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
	if ($_GET["module"]=="beranda") { ?>
		<li class="active">
			<a href="?module=beranda"><i class="fa fa-home"></i> Dashboard </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=beranda"><i class="fa fa-home"></i> Dashboard </a>
	  	</li>
	<?php
	}

	// ***** MENU CETAK LAPORAN *****
	// **** BAGIAN LAPORAN STOK ****
	// jika menu Laporan Stok Multimedia dipilih, menu Laporan Stok Multimedia aktif
	if ($_GET["module"]=="lap_stok_multimedia") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Tersedia</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Network dipilih, menu Laporan Stok Network aktif
	elseif ($_GET["module"]=="lap_stok_network") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Tersedia</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Telepon dipilih, menu Laporan Stok Telepon aktif
	elseif ($_GET["module"]=="lap_stok_telepon") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Toner dipilih, menu Laporan Stok Toner aktif
	elseif ($_GET["module"]=="lap_stok") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// **** BAGIAN LAPORAN STOK MASUK ****
	// jika menu Laporan Stok Masuk Multimedia dipilih, menu Laporan Stok Masuk Multimedia aktif
	elseif ($_GET["module"]=="lap_multimedia_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Network dipilih, menu Laporan Stok Masuk Network aktif
	elseif ($_GET["module"]=="lap_network_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Telepon dipilih, menu Laporan Stok Masuk Telepon aktif
	elseif ($_GET["module"]=="lap_telepon_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Masuk Toner dipilih, menu Laporan Stok Masuk Toner aktif
	elseif ($_GET["module"]=="lap_stok_masuk") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// **** BAGIAN LAPORAN STOK KELUAR ****
	// jika menu Laporan Stok Keluar Multimedia dipilih, menu Laporan Stok Keluar Multimedia aktif
	elseif ($_GET["module"]=="lap_multimedia_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Network dipilih, menu Laporan Stok Keluar Network aktif
	elseif ($_GET["module"]=="lap_network_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li class="active"><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Telepon dipilih, menu Laporan Stok Keluar Telepon aktif
	elseif ($_GET["module"]=="lap_telepon_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_masuk"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_masuk"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_masuk"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li class="active"><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Laporan Stok Keluar Toner dipilih, menu Laporan Stok Keluar Toner aktif
	elseif ($_GET["module"]=="lap_stok_keluar") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_masuk_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_masuk_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_masuk_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="active treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li class="active"><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}
	// jika menu Stok Keluar tidak dipilih, menu Stok Keluar tidak aktif
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-print"></i> <span>Cetak Laporan</span> <i class="fa fa-angle-right pull-right"></i>
          	</a>
			  <ul class="treeview-menu">
			  <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Terkini</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Masuk</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_stok_masuk_multimedia"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_stok_masuk_network"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_stok_masuk_telepon"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_masuk"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li> -->
				<li class="treeview">
					<a href="javascript:void(0);">
						<i class="fa fa-file-text"></i> <span>Stok Keluar</span> <i class="fa fa-angle-right pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=lap_multimedia_keluar"><i class="fa fa-file-pdf-o"></i> Multimedia </a></li>
						<li><a href="?module=lap_network_keluar"><i class="fa fa-file-pdf-o"></i> Network </a></li>
						<li><a href="?module=lap_telepon_keluar"><i class="fa fa-file-pdf-o"></i> Telepon </a></li>
						<li><a href="?module=lap_stok_keluar"><i class="fa fa-file-pdf-o"></i> Toner </a></li>
					</ul>
				</li>
      		</ul>
    	</li>
    <?php
	}

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
// jika hak akses = Gudang, tampilkan menu
if ($_SESSION['hak_akses']=='Gudang') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu beranda dipilih, menu beranda aktif
  if ($_GET["module"]=="beranda") { ?>
    <li class="active">
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
      </li>
  <?php
  }
  // jika tidak, menu home tidak aktif
  else { ?>
    <li>
      <a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a>
      </li>
  <?php
  }

  // jika menu data stok dipilih, menu data stok aktif
  if ($_GET["module"]=="stok" || $_GET["module"]=="form_stok") { ?>
    <li class="active">
      <a href="?module=stok"><i class="fa fa-folder"></i> Data stok </a>
      </li>
  <?php
  }
  // jika tidak, menu data stok tidak aktif
  else { ?>
    <li>
      <a href="?module=stok"><i class="fa fa-folder"></i> Data stok </a>
      </li>
  <?php
  }

  // jika menu data stok masuk dipilih, menu data stok masuk aktif
  if ($_GET["module"]=="stok_masuk" || $_GET["module"]=="form_stok_masuk") { ?>
    <li class="active">
      <a href="?module=stok_masuk"><i class="fa fa-clone"></i> Stock Opname </a>
      </li>
  <?php
  }
  // jika tidak, menu data stok masuk tidak aktif
  else { ?>
    <li>
      <a href="?module=stok_masuk"><i class="fa fa-clone"></i> Stock Opname </a>
      </li>
  <?php
  }

  // jika menu Laporan Stok stok dipilih, menu Laporan Stok stok aktif
  if ($_GET["module"]=="lap_stok") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> SBBK </a></li>
            <li><a href="?module=lap_stok_masuk"><i class="fa fa-circle-o"></i> Permintaan BMHP </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan stok Masuk dipilih, menu Laporan stok Masuk aktif
  elseif ($_GET["module"]=="lap_stok_masuk") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> SBBK </a></li>
            <li class="active"><a href="?module=lap_stok_masuk"><i class="fa fa-circle-o"></i> Permintaan BMHP </a></li>
          </ul>
      </li>
    <?php
  }
  // jika menu Laporan tidak dipilih, menu Laporan tidak aktif
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=lap_stok"><i class="fa fa-circle-o"></i> SBBK </a></li>
            <li><a href="?module=lap_stok_masuk"><i class="fa fa-circle-o"></i> Permintaan BMHP </a></li>
          </ul>
      </li>
    <?php
  }

	// jika menu ubah password dipilih, menu ubah password aktif
	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	// jika tidak, menu ubah password tidak aktif
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Ubah Password</a>
		</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->
<?php
}
?>