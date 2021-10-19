
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
      </br>
    </br>
        <center>
          <a class="btn btn-dark" href="<?= base_url('Admin/lp_stok');?>"> Laporan Stok</a>
          <a class="btn btn-dark" href="<?= base_url('Admin/lp_keuangan');?>"> Laporan Penghasilan</a>

      </br>
    </br>
    <form class="form-control" action="" id="Laporan">
    <li class="list-inline-item">
      <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="" >
        <option value="default" type="button" href="<?= base_url('admin/lp_pemesanan');?>">Show All</option>
        <option value="popularity">Tenda</option>
        <option value="low-high">Alat Masak</option>
        <option value="high-low">Perlengkapan</option>
      </select>
    </li>
  </form>
    </center>
        <div class="card">
          <div class="card-header">
          <h2>Laporan Transaksi</h2>
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

                </tr>
                <?php
                $i = 0;
                $all =0;
                foreach ($data as $row) {
                  $i = $i + 1 ;?>

                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row->email; ?></td>
                  <td><?= $row->name;?></td>
                  <td><?= $row->qty; ?></td>
                  <td>Rp. <?= $row->total; ?></td>
                  <td><?= $row->status; ?></td>
                  <?php $all = $all + $row->total; ?>

                    </tr>

              <?php } ?>
              <tr>
                <td></td>
                <td colspan="3" align="right">JUMLAH</td>
                <td>Rp. <?=$all?></td>
              </tr>

              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div align="center">

 </div>
