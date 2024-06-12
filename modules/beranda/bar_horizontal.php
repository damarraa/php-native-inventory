<?php
    $koneksi = mysqli_connect("localhost", "root", "", "stokbarang");
    if (!$koneksi) {
        die("Koneksi Database Gagal: ".mysqli_connect_error());
      }

    $label_net = mysqli_query($koneksi, "SELECT nama_network FROM sb_stok_network ORDER BY kode_network ASC");
    $jumnetstok = mysqli_query($koneksi, "SELECT stok FROM sb_stok_network ORDER BY kode_network ASC");
?>

<canvas id="jnetwork" style="height: 350px; max-height: 100%; width: 400px; max-width: 100%;"></canvas>

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
    const nama_network = [
        <?php
           while ($a = mysqli_fetch_array($label_net)) {
            echo '"'.$a['nama_network'].'",';
           }; 
        ?>
    ];

    // let nama_network = [
    //     'TP-Link TL-WN722N', 'TP-Link TD-W8961N', 'Tenda AC1200', 'UBIQUITI', 'Catalyst 2950', 'Catalyst 3750 v2', 'HPE 1820 J997A',
    //     'SP-316', 'NanoStation M5', 'Rocket M5', 'InfiNet R5000', 'PoE30G-AT'
    // ];

    const dataBarHorizontal = {
    labels: nama_network,
    datasets: [{
        axis: 'y',
        label: 'Stok Network',
        data: [
            <?php
              while($p = mysqli_fetch_array($jumnetstok)) {
                echo '"'.$p['stok'].'",';
              }
            ?>
        ],
        fill: false,
        backgroundColor: [
        'rgb(2,16,36)',
        'rgb(5,38,89)',
        'rgb(36,47,73)',
        'rgb(84,131,179)',
        'rgb(124,160,202)',
        'rgb(193,232,255)',
        'rgb(232, 240, 222)',
        'rgb(249, 235, 199)',
        'rgb(203,76,70)',
        'rgb(150, 0, 24)',
        'rgb(103, 0, 16)',
        'rgb(60,0,0)',
        'rgba(30,5,8)'
        ],
        borderWidth: 1
        }]
    };

    const configBarHorizontal = {
        type: 'bar',
        data: dataBarHorizontal,
        options: {
            indexAxis: 'y',
            plugins: {
                title: {
                    display: true,
                    text: 'Jumlah Stok Network'
                }
            }
        }
    };

    const chartBarHorizontal = new Chart(
      document.getElementById('jnetwork'),
      configBarHorizontal
    )
</script>