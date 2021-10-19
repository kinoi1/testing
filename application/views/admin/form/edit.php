
  <div class="container">
    <div class="col-lg-8">
      <form action="<?= base_url('admin/update/'.$row->id); ?>" method="post">
        <div class="row">
          <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="name">Nama</label>
            <input class="form-control form-control-lg" name="name"
            value="<?= $row->name; ?>">
          </div>
          <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="email">Email</label>
            <input class="form-control form-control-lg" id="email" name="email" type="text" value="<?= $row->email; ?>">
          </div>
          <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="tgl">Tanggal Lahir</label>
            <input class="form-control form-control-lg"  name="tgl_lahir" type="text" value="<?= $row->tgl_lahir; ?>" >
          </div>
          <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="alamat">Alamat</label>
            <input class="form-control form-control-lg" id="alamat" name="alamat" type="text" value="<?= $row->alamat; ?>">
          </div>

          <div class="col-lg-12 form-group">
          <button type="submit" class="btn btn-dark" value="submit">submit</button>
        </form>
            <button type="button" class="btn btn-danger"> Cancel</button>
          </div>
          </div>

    </div>
  </div>
