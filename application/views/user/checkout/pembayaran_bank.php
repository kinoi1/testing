
<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">Checkout</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <h2 class="h5 text-uppercase mb-4">Pembayaran BANK BRI</h2>
    <p>Kode pembayaran</p>
    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <!-- CART TABLE-->
        <div class="table-responsive mb-4">
          <?php foreach ($pembayaran as $row): ?>


          <table class="table">
            <thead class="bg-light">
              <tr>
              <h3> <?= $row->no_rek;?> </H3>
              </br>
              <h5 class="">Jumlah yang harus dibayar : <?= $row->total;?></h5>
              </br>
              </tr>
            </thead>

            <tbody>
              <tr>
                <?php endforeach; ?>
                <p class="bg-light">Cara Pembayaran</p>

              <p class="bg-light">
              1.Masukkan Nomor PIN ATM</br>
              2.Pilih Jenis Transaksi: Pilih Transfer </br>
              3.Pilih Bank Tujuan Transfer</br>
              4.Pilih Bank BRI</br>
              5.Masukkan nominal sesuai dengan yang tertera di web</br>
              6.Foto bukti pembayaran</br>
              7.Kirimkan bukti Pengiriman</br>
              8.Pesanan akan dikirim sesuai alamat Customer
              </p>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- CART NAV-->
        <div class="bg-light px-4 py-3">
          <div class="row align-items-center text-center">
            <div class="col-md-6 mb-3 mb-md-0 text-md-left"></div>
            <div class="col-md-6 text-md-right"></div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>
