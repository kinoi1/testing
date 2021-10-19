
<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">Kode Pembayaran</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <h2 class="h5 text-uppercase mb-4">Pembayaran  DANA</h2>
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
              1.Buka aplikasi DANA lalu ketuk menu Kirim</br>
              2.Pilih metode transfer dan kirim ke nomor yang dituju </br>
              3.Ketuk kirim ke nomer telepon setelah itu tambahkan nomor yang ada pada web</br>
              4.Tulis nominal yang akan dikirimkan</br>
              5.Klik kirim lalu konfirmasi bahwa nominal telah sesuai </br>
              6.Masukkan pin akun dana </br>
              7.Kirimkan bukti Pembayaran berupa Screenshot </br>
              8.Pesanan akan diproses
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
