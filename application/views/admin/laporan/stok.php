
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
      </br>
    </br>
        <div align="left">
          <button class="btn btn-dark" type="button" name="button" onclick="print_d()">print/Export pdf</button>
        </div>
          <script type="text/javascript">
            function print_d(){
              window.open("pdf_stok","_blank");
            }
          </script>

        </br>
        <div class="card">
          <div class="card-header">
          </br>



          </div>

          <div class="card-body">
            <div class="table-responsive">

              <center>
                SISTEM PENJUALAN/PENYEWAAN ALAT OUTDOOR (SIPE'O) </br>
                Laporan Stok </br>
              </center>
            </br>
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>nama_barang</th>
                  <th>Harga satuan </th>
                  <th>Stok</th>
                  <th>status</th>

                </tr>
                <?php

                foreach ($data as $row) {
                  ?>

                <tr>
                  <td><?= $row->id; ?></td>
                  <td><?= $row->nama_barang; ?></td>
                  <td><?= $row->harga;?></td>
                  <td><?= $row->stok; ?></td>
                  <td><?= $row->status; ?></td>
                    </tr>

              <?php } ?>

              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div align="center">

 </div>
