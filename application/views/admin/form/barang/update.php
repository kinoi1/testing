
<!--  Ini adalah halaman Dashboard guest yang akan pertama kali muncul -->

  <!--  Modal -->

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Tambah barang</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <?= form_open_multipart('barang/aksi_edit_data/'.$row->id); ?>

                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?= $row->nama_barang;?>"</td>
                  </tr>
                  <tr>
                    <td>gambar</td>
                    <td>:</td>
                    <td>
                      <img src="<?= base_url('assets/img/barang/'.$row->gambar); ?>" style="width:250px">
                      <input type="file" name="gambar">
                      <small>Biarkan kosong jika tidak diganti</small>
                    </td>
                 </tr>
                  <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" name="deskripsi" value="<?= $row->deskripsi; ?>"></td>
                  </tr>
                  <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga" value="<?= $row->harga; ?>"></td>
                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td><input type="number" name="stok" value="<?= $row->stok; ?>"></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select class="custom-select" name="status">
                    <option selected>Pilih</option>
                    <option value="ready"> Ready</option>
                    <option value="sewa">Sewa</option>
                    <option value="habis">Habis</option></td>
                  </select>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                      <select class="custom-select" name="category">
                      <option selected>Pilih</option>
                      <option value="carrier"> Carrier</option>
                      <option value="tenda">Tenda</option>
                      <option value="alat masak">Alat masak</option>
                      <option value="sleeping bag">Sleeping bag</option>
                      <option value="headlamp">Headlamp</option>
                      <option value="lainnya">Lainnya</option>
                </select></td>
                  </tr>
                  <tr>
                    <td><input class="btn btn-dark" type="submit" value="Simpan"></td>
                  </tr>

                <?= form_close(); ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
