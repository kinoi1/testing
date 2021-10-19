
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <div class="card-header">
            <h4>Basic Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">


              <table class="table">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Gambar</th>
                  <th>deskripsi</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Status</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
                <?php
                $i = 0;
                foreach ($data_barang->result_array() as $row) {
                  $i = $i + 1 ;?>

                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['nama_barang']; ?></td>
                  <td> <img style="width:100px" src=" <?= base_url('assets/img/barang/'.$row['gambar']) ;?>"></td>
                  <td><?= $row['deskripsi']; ?></td>
                  <td><?= $row['harga']; ?></td>
                  <td><?= $row['stok']; ?></td>
                  <td><?= $row['status']; ?></td>
                  <td><?= $row['category']; ?></td>
                  <td><a href="<?= base_url('barang/update/'.$row['id']); ?> " >Edit </a>
                   <a href="<?= base_url('barang/delete/'.$row['id']); ?>">Delete</a></td>
                </tr>
              <?php } ?>
              </table>
              <a class="btn btn-dark"href="<?= base_url('Barang/tambah_barang'); ?> " >Tambah </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div align="center">
  <?php

  echo $paginator;
   ?>
 </div>
