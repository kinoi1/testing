
    <!-- HERO SECTION-->
    <div class="container">
    <div class="card" style="width: 20rem;">
      <div class="card-body">
        <h5 class="card-title"> Detail pemesanan </h5>

      </div>

      <?php foreach ($data as $row):?>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Nama :<?= $row->name; ?>  </li>
        <li class="list-group-item"> No.HP :<?= $row->no_hp; ?>   </li>
        <li class="list-group-item"> Email :<?= $row->user;?>  </li>
        <li class="list-group-item"> Alamat :<?= $row->alamat;?>  </li>
        <li class="list-group-item"> Expedisi : <?= $row->ekspedisi;?></li>
        <li class="list-group-item"> Durasi :<?= $row->durasi; ?> Hari </li>
        <li class="list-group-item"> Ongkos kirim :<?= $row->ongkir;?>  </li>
        <li class="list-group-item"> Metode pembayaram :<?= $row->metode_pembayaran;?>  </li>
        <li class="list-group-item"> Status :<?= $row->status; ?>  </li>
        <li class="list-group-item">
          <?PHP  if($row->status == "menunggu pembayaran"){?>
          <a href="<?= base_url('pembayaran/konfirmasi/'.$row->id_transaksi);?>" class="card-link" > Konfirmasi Pembayaran</a></li>
        <?php }else { }?>
      </ul>

      <div class="card-body">
        <?php  if($row->metode_pembayaran == "COD"){
               echo "  <a href=".base_url('pembayaran/COD/'.$row->id_transaksi)." class= card-link > Lanjutkan Pembayaran COD</a>";
             }else if($row->metode_pembayaran == "DANA"){
                 echo "  <a href=".base_url('pembayaran/DANA/'.$row->id_transaksi)." class=card-link > Lanjutkan Pembayaran DANA</a>";
               }else if($row->metode_pembayaran == "BANK"){
                 echo "  <a href=".base_url('pembayaran/BANK/'.$row->id_transaksi)." class= card-link > Lanjutkan Pembayaran BANK</a>";
             }else{
                echo "  <a href=".base_url('transaksi/add/'.$row->id_transaksi)." class= card-link > Lanjutkan Pembayaran</a>";
             }

             echo "</br>";
            if($row->status =="pengiriman"){
              echo "  <a href=".base_url('pembayaran/selesai/'.$row->id_transaksi)." class= card-link > Selesai</a>";
            }else{}
                  ?>

      </div>
      </div>
    <?php endforeach;?>
      <section class="py-5">
      </section>
    </div>
    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Customer services</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
              <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
              <li><a class="footer-link" href="#">Online Stores</a></li>
              <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Company</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footers-link" href="#">What We Do</a></li>
              <li><a class="footer-link" href="#">Available Services</a></li>
              <li><a class="footer-link" href="#">Latest Posts</a></li>
              <li><a class="footer-link" href="#">FAQs</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#">Twitter</a></li>
              <li><a class="footer-link" href="#">Instagram</a></li>
              <li><a class="footer-link" href="#">Tumblr</a></li>
              <li><a class="footer-link" href="#">Pinterest</a></li>
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-lg-6">
              <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
            </div>
            <div class="col-lg-6 text-lg-right">
              <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
            </div>
          </div>
        </div>
      </div>
