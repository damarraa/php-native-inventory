<?php
    $koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
    if (!$koneksi) {
      die("Koneksi Database Gagal: ".mysqli_connect_error());
    };
?>

<!--  -->

<canvas id="mtoner" style="min-height: 250px; height: 250px; width: 250px; max-height: 250px; max-width: 100%;"></canvas>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" 
  integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const dataDonut = {
      labels: [
        'Stok Toner Masuk',
        'Stok Toner Keluar'
      ],
      datasets: [{
        label: 'Stok Toner',
        data: [
          <?php
          $query  = $koneksi->query("SELECT id_masuk FROM sb_barang_masuk");
          $resF   = $query->num_rows;
          echo $resF;
          ?>,
        <?php
          $query  = $koneksi->query("SELECT id_keluar FROM sb_barang_keluar");
          $resF   = $query->num_rows;
          echo $resF;
          ?>
        ],
        backgroundColor: [
          'rgb(5,38,89)',
          'rgb(150, 0, 24)',
        ],
        hoverOffset: 4
      }]
    };

    const configDonut = {
      type: 'doughnut',
      data: dataDonut,
      options: {
        plugins: {
          title: {
            display: true,
            text: 'Jumlah Transaksi Toner',
          }
        }
      }
    };

    const chartDonut = new Chart(
      document.getElementById('mtoner'),
      configDonut
    )
  </script>