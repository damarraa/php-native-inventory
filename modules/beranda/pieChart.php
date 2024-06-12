<?php
    $koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
    if (!$koneksi) {
        die("Koneksi Database Gagal: ".mysqli_connect_error());
      }

    $label_multimedia = mysqli_query($koneksi, "SELECT nama_multimedia FROM sb_stok_multimedia ORDER BY kode_multimedia ASC");
    $jumstok = mysqli_query($koneksi, "SELECT stok FROM sb_stok_multimedia ORDER BY kode_multimedia ASC");
?>

<!-- <canvas id="jmultimedia" style="height: 350px; max-height: 100%; width: 350px; max-width: 100%;"></canvas> -->

<canvas id="jmultimedia" width="380px" height="380px" style="display: block; box-sizing: border-box; height: 90px; width: 90px;"></canvas>

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
  const nama_multimedia = [
    <?php 
      while ($m = mysqli_fetch_array($label_multimedia)) {
        echo '"'.$m['nama_multimedia'].'",';
      };
    ?>
  ]

  // let nama_multimedia = [
  //   'Camera Meeting', 'Multimedia Projector', 'Receiver TV',
  //   'Bracket TV', 'Kabel HDMI', 'Kabel VGA'
  // ]

  const dataPieChartv1 = {
    labels: nama_multimedia,
    datasets: [{
      label: 'Stok Multimedia',
      data: [
        <?php 
          while($p = mysqli_fetch_array($jumstok)) {
            echo '"'.$p['stok'].'",';
          }

          // $queryPiev1 = $koneksi->query("SELECT kode_multimedia FROM sb_stok_multimedia");
          // $resF       = $queryPiev1->num_rows;
          // echo $resF;
        ?>
      ],
      backgroundColor: [
        'rgb(2,16,36)',
        'rgb(5,38,89)',
        'rgb(84,131,179)',
        'rgb(124,160,202)',
        'rgb(193,232,255)',
        'rgb(232, 240, 222)'
      ],
      hoverOffset: 4
    }]
  };
  
  const configPieChartv1 = {
    type: 'pie',
    data: dataPieChartv1,
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Jumlah Stok Multimedia'
        }
      }
    }
  };

  const chartPieChartv1 = new Chart(
    document.getElementById('jmultimedia'),
    configPieChartv1
  )
</script>