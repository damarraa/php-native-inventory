<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Laporan Stok Masuk Telepon
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda</a></li>
    <li class="active">Cetak Laporan</li>
    <li class="active">Stok Masuk Telepon</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- Form Laporan -->
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="GET" action="modules/lap-multimedia-masuk/cetak.php" target="_blank">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-1">Tanggal</label>
              <div class="col-sm-2">
                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal" autocomplete="off" required>
              </div>

              <label class="col-sm-1">s.d.</label>
              <div class="col-sm-2">
                <input style="margin-left:-35px" type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_akhir" autocomplete="off" required>
              </div>
            </div>
          </div>
          
          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="background-color: #0C2841;">
                  <i class="fa fa-print"></i> Cetak
                </button>
                <button type="reset" id="reset" class="btn btn-primary btn-outline-warning btn-submit" style="background-color: #0C2841;">
                  <i class="fa fa-refresh"></i> Reset
                </button>
              </div>
            </div>
          </div>
        </form>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> -->
    <!-- Font Awesome -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> -->
    <!-- Datepicker -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- Datatables -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script> -->
    <!-- Momentjs -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script> -->
        <!-- // Fetch records
        function fetch(start_date, end_date) {
            $.ajax({
                url: "records.php",
                type: "POST",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = "1";
                    $('#dataTables1').DataTable({
                        "data": data,
                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "no",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "id_masuk"
                            },
                            {
                                "data": "tanggal_masuk",
                                "render": function(data, type, row, meta) {
                                  return moment(row.tanggal_masuk).format('dd-mm-yyyy');
                                }
                            },
                            {
                                "data": "nama_barang"
                            },
                            {
                                "data": "kode_barang"
                            },
                            {
                                "data": "jumlah"
                            },
                        ]
                    });
                }
            });
        }
        fetch();
        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Kedua tanggal diperlukan!");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });
        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });
    </script> -->

        <!-- Body datatables filter -->
        <!-- <div class="box box-primary">
        <div class="box-body">
           tampilan tabel stok -->
          <!-- <table id="dataTables1" class="table table-bordered table-striped table-hover"> -->
            <!-- tampilan tabel header -->
            <!-- <thead> -->
              <!-- <tr> -->
                <!-- <th class="center">No.</th> -->
                <!-- <th class="center">Kode Masuk</th> -->
                <!-- <th class="center">Tanggal Masuk</th>
                <th class="center">Kode Barang</th>
                <th class="center">Nama Barang</th>
                <th class="center">Jumlah</th>
                <th class="center">Satuan</th>
              </tr>
            </thead> -->
            <!-- tampilan tabel body -->
            <!-- <tbody> -->
            <?php  
            
            // ambil data hasil submit dari form
                // if(isset($_POST['filter_tgl'])) {
              //   $tgl_awal   = $_POST['tgl_awal'];
              //   $tgl_akhir  = $_POST['tgl_akhir'];

              //   $koneksi  = mysqli_connect("localhost", "root", "", "stokbarang");

              //   if(mysqli_connect_error()) {
              //     die("Koneksi database gagal: ".mysqli_connect_error());
              //   }

              //   //Query memanggil data barang masuk
              //   $querymasuk   = "SELECT * FROM sb_barang_masuk WHERE tanggal_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir'";
              //   $resultmasuk  = mysqli_query($koneksi,$querymasuk);

              //   if(mysqli_num_rows($resultmasuk) > 0) {
              //     echo "<tr>
              //     <td width='30' class='center'>$no</td>
              //     <td width='100' class='center'>$data[id_masuk]</td>
              //     <td width='80' class='center'>$tanggal_masuk</td>
              //     <td width='80' class='center'>$data[kode_barang]</td>
              //     <td width='200'>$data[nama_barang]</td>
              //     <td width='100' align='right'>$data[jumlah]</td>
              //     <td width='80' class='center'>$data[satuan]</td>
              //   </tr>";
              //   $no++;
              //   }
              // }
              // ?>
            <!-- </tbody>
          </table> -->
        </div><!-- /.box-body -->
      </div><!-- /.box -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->