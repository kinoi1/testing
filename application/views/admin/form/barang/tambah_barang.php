
<!--  Ini adalah halaman Dashboard guest yang akan pertama kali muncul -->

  <!--  Modal -->

  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <div class="card-header">
            <h4>Tambah barang</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-md-12 col-md-offset-12">
                <?= form_open_multipart('barang/aksi_tambah_barang'); ?>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name">
                  </div>
                  <div class="form-group">
                    <label>gambar</label>
                    <input type="file" name="gambar">
                  </div>
                  <div class="form-group-md-3 ">
                    <label>Deskripsi</label>
                    <textarea class="col-10" name="deskripsi"> </textarea>
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga">
                  </div>
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                      <select class="custom-select-md-3" name="status">
                      <option selected>Pilih</option>
                      <option value="ready"> Ready</option>
                      <option value="sewa">Sewa</option>
                      <option value="habis">Habis</option>
                    </select>
                  </div>


                  <div class="col-md-3 mb-3">
                      <label >Kategori</label>
                      <select class="custom-select" id="validationTooltip04" name="category">
                        <option selected>Pilih</option>
                        <option value="carrier"> Carrier</option>
                        <option value="tenda">Tenda</option>
                        <option value="alat masak">Alat masak</option>
                        <option value="sleeping bag">Sleeping bag</option>
                        <option value="headlamp">Headlamp</option>
                        <option value="lainnya">Lainnya</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark">
                      <i class="fa fa-paper-plane"> simpan</i>
                    </button>
                  </div>


                <?= form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
