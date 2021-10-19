
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
      </br>
    </br>

        <div class="card">
          <div class="card-header">
          <h2>Daftar Order</h2>
          </div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table" id="data_transaksi">
                <tr>
                  <th>No</th>
                  <th>Customer</th>
                  <th>Nama </th>
                  <th>qty</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Aksi</th>

                </tr>
                <?php
                $i = 0;
                $status = '';
                foreach ($data as $row) {
                  $i = $i + 1 ;?>

                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row->email; ?></td>
                  <td><?= $row->name;?></td>
                  <td><?= $row->qty; ?></td>
                  <td>Rp. <?= $row->total; ?></td>
                  <td><?= $row->status; ?></td>
                  <?php $status = $row->status;

                  if ($status == 'process'){
                    echo "<td><a href=".base_url('Admin/kirim_barang/'.$row->id_transaksi).">Kirim </a></td>";
                  }else if($status =='pengiriman'){

                  }
                  ?>

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
