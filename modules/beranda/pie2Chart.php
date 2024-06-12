<?php
    $koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
    if (!$koneksi) {
        die("Koneksi Database Gagal: ".mysqli_connect_error());
      }
    
    $label_telepon = mysqli_query($koneksi, "SELECT nama_telepon FROM sb_stok_telepon ORDER BY kode_telepon ASC");
    $jumstok = mysqli_query($koneksi, "SELECT stok FROM sb_stok_telepon ORDER BY kode_telepon ASC");
?>

<canvas id="jtelepon" width="300px" height="300px" style="display: block; box-sizing: border-box; height: 90px; width: 90px;"></canvas>

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
  const nama_telepon = [
    <?php 
      while ($t = mysqli_fetch_array($label_telepon)) {
        echo '"'.$t['nama_telepon'].'",';
      };
    ?>
  ]
  // let nama_telepon = [
  //   'Telepon Analog', 'Telepon Digital', 'Telepon Digital Wireless',
  //   'Roset Telepon', 'Kabel PVC'
  // ]

  const dataPieChartv2 = {
    labels: nama_telepon,
    datasets: [{
      label: 'Stok Telepon',
      data: [
        <?php 
          while($p = mysqli_fetch_array($jumstok)) {
            echo '"'.$p['stok'].'",';
          }
        ?>
      ],
      backgroundColor: [
        'rgb(60,0,0)',
        'rgb(103, 0, 16)',
        'rgb(150, 0, 24)',
        'rgb(203,76,70)',
        'rgb(249, 235, 199)'
      ],
      hoverOffset: 4
    }]
  };
  
  const configPieChartv2 = {
    type: 'pie',
    data: dataPieChartv2,
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Jumlah Stok Telepon'
        }
      }
    }
  };

  const chartPieChartv2 = new Chart(
    document.getElementById('jtelepon'),
    configPieChartv2
  )
</script>