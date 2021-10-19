
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
                <?= form_open_multipart('profil/aksi_edit_profil'); ?>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" value="<?= $row->name ;?>">
                  </div>
                  <div class="form-group">
                    <label>Foto Profil</label>
                    <input type="file" name="image" value="<?= $row->name ;?>">
                  </div>
                  <div class="form-group-md-3 ">
                    <label>Tanggal Lahir</label>
                    <input class="col-3" type="date" name="tgl_lahir" value="<?= $row->tgl_lahir ;?>" >
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input class="col-10" type="text" name="alamat" value="<?= $row->alamat ;?>">
                  </div>
                  <div class="form-group">
                    <label>No.Hp</label>
                    <input type="number" name="no_hp" value="<?= $row->no_hp ;?>">
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
