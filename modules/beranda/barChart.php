<?php
    $koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
    if (!$koneksi) {
      die("Koneksi Database Gagal: ".mysqli_connect_error());
    }
    
    $label_bar = mysqli_query($koneksi, "SELECT nama_barang FROM sb_stok_barang ORDER BY kode_barang ASC");
    $jumstok = mysqli_query($koneksi, "SELECT stok FROM sb_stok_barang ORDER BY kode_barang ASC");
?>

  <canvas id="jtoner" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" 
  integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" 
  integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" 
  integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  <script>
    const labels_BarVertical = [
    <?php 
      while($p = mysqli_fetch_array($label_bar)) {
        echo '"'.$p['nama_barang'].'",';
      }; 
    ?>
    ];

    const dataBar = {
      labels: labels_BarVertical,
      datasets: [{
        label: 'Stok Toner',
        data: [
            <?php
              while($p = mysqli_fetch_array($jumstok)) {
                echo '"'.$p['stok'].'",';
              }
            ?>
        ],
        backgroundColor: [
          'rgba(0, 0, 0, 0.8)',
          'rgba(255, 0, 255, 0.8)',
          'rgba(255, 255, 0, 0.8)',
          'rgba(0, 255, 255, 0.8)',
          'rgba(0, 0, 0, 0.8)',
          'rgba(0, 0, 0, 0.8)',
          'rgba(111, 222, 333, 1)', // Bar dengan linear gradient
          'rgba(255, 0, 255, 0.8)',
          'rgba(255, 255, 0, 0.8)',
          'rgba(0, 255, 255, 0.8)',
          'rgba(0, 0, 0, 0.8)',
          'rgba(0, 0, 0, 0.8)',
          'rgba(255, 0, 255, 0.8)',
          'rgba(255, 255, 0, 0.8)',
          'rgba(0, 255, 255, 0.8)',
          'rgba(0, 0, 0, 0.8)',
          'rgba(255, 255, 0, 0.8)'
        ],
        borderWidth: 1  
      }]
    };

    const configBar = {
      type: 'bar',
      data: dataBar,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        plugins: {
          datalabels: {
            backgroundColor: function(context) {
              if (context.dataIndex === 4) {
                // Atur linear gradient pada bar dengan indeks 5
                const gradient = context.chart.ctx.createLinearGradient(0, 0, 0, 100);
                gradient.addColorStop(0, 'rgba(255,0,255,1)');
                gradient.addColorStop(0.35, 'rgba(255,255,0,1)');
                gradient.addColorStop(1, 'rgba(0,255,255,1)');
                return gradient;
              } else {
                // Gunakan warna RGBA lainnya pada bar lainnya
                return 'rgba(0, 0, 0, 1)';
              }
            },
            borderColor: 'transparent',
            borderRadius: 4,
            borderWidth: 1,
            color: 'white',
            font: {
              weight: 'bold'
            },
            align: 'center'
          },
          title: {
            display: true,
            text: 'Jumlah Stok Toner Per Unit',
          }
        }
      }
    };
    const chartBar = new Chart(
      document.getElementById('jtoner'),
      configBar
    )
  </script>