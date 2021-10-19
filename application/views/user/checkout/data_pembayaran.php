<div class="container">
  <!-- HERO SECTION-->

  <section class="py-5">
    <!-- BILLING ADDRESS-->
    <h2 class="h5 text-uppercase mb-4">Detail Pemesanan</h2>
    <div class="row">
      <div class="col-lg-8">
          <?php foreach ($data as $row){?>

        <form action="<?= base_url('transaksi/aksi_checkout/'.$row->id_transaksi); ?>" method="post">
          <div class="row">
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="name">Name</label>
              <input class="form-control form-control-lg" id="name" name="name" type="text"
              value="<?= $row->name; ?>">

            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="email">Email</label>
              <input class="form-control form-control-lg" id="email" name="email" type="text" value="<?= $row->email; ?>">

            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="phone">No. HP</label>
              <input class="form-control form-control-lg" id="phone" name="no_hp" type="text"  value="<?= $row->no_hp; ?>">
            </div>
            <div class="col-lg-12 form-group">
              <label class="text-small text-uppercase" for="alamat">Alamat</label>
              <input class="form-control form-control-lg" id="alamat" name="alamat" type="text" placeholder="Jl.jendral sudirman no 42 desa xxx kec. subang kab.subang jawabarat 41530 " value="<?= $row->alamat; ?>">

            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" >Jasa Pengiriman</label>
              <select class="form-control form-control-lg" name="ekspedisi">
                <option  value="JNE">JNE</option>
                <option  value="TIKI">TIKI</option>
                <option  value="POS">POS</option>
                <option  value="JNT">JNT</option>
                <option  value="Gojek">Gojek</option>
              </select>
            </div>

            <div class="col-lg-6 form-group">
              <label class="form-group ">Durasi Pengiriman</label>
              <select class="form-control form-control-lg" name="durasi">
                <option  value="1">1 Hari</option>
                <option  value="3" selected>3 Hari</option>
                <option  value="5">5 Hari</option>
              </select>
            </div>

            <div class="col-lg-6 form-group">
              <label class="form-group ">Ongkos Kirim</label>
              <select class="form-control form-control-lg" name="ongkir">
                <option  value="15000">Rp.15000</option>
                <option  value="20000">Rp.20000</option>
                <option  value="30000">Rp.30000</option>
              </select>
              <input type="hidden" name="total" value="<?= $row->total;?>">
            </div>

            <div class="col-lg-6 form-group">
              <label class="form-group ">Metode Pembayaran</label>
              <select class="form-control form-control-lg" name="metode_pembayaran" >
                <option  value="COD">COD</option>
                <option  value="BANK">Bank </option>
                <option  value="DANA">Dana</option>
              </select>
            </div>
          <?php } ?>

            <div class="col-lg-12 form-group">
              <button class="btn btn-dark" type="submit">Submit</button>
            </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- ORDER SUMMARY-->
    </div>
  </section>
</div>
