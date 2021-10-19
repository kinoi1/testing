
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
      </br>
    </br>
        <div align="left">
          <button class="btn btn-dark" type="button" name="button" onclick="print_d()">print/Export pdf</button>
          <script type="text/javascript">
            function print_d(){
              window.open("pdf_keuangan","_blank");
            }
          </script>
        </div>
      </br>
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <div class="table-responsive">

              <center>
                SISTEM PENJUALAN/PENYEWAAN ALAT OUTDOOR (SIPE'O) </br>
                Laporan Pendapatan </br>
              </center>
            </br>
              <table class="table">
                <tr>
                  <th>Tanggal</th>
                  <th>Nomor Transaksi </th>
                  <th>Nama Barang</th>
                  <th>Total </th>
                  <th>status</th>
                </tr>
                <?php
                $all = 0;
                foreach ($data as $row) {
                  ?>

                <tr>
                  <td><?= $row->tanggal;?></td>
                  <td><?= $row->id_transaksi; ?></td>
                  <td><?= $row->nama_barang;?></td>
                  <td><?= $row->total; ?></td>
                  <td><?= $row->status; ?></td>
                  <?php $all = $all + $row->total; ?>
                    </tr>

              <?php } ?>
              <tr>

                <td colspan="3" align="right">JUMLAH</td>
                <td>Rp. <?=$all?></td>
              </tr>
              </table>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div align="center">

 </div>
