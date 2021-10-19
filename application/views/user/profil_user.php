
    <!-- HERO SECTION-->
    <div class="container">
    <div class="card" style="width: 18rem;">
      <img src="<?= base_url('assets/img/'.$user['image']);?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Profil </h5>

      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Nama : <?= $user['name'];?> </li>
        <li class="list-group-item"> Email : <?= $user['email']; ?> </li>
        <li class="list-group-item"> Tgl Lahir : <?= $user['tgl_lahir'];?> </li>
        <li class="list-group-item"> Alamat : <?= $user['alamat'];?> </li>
        <li class="list-group-item"> No Hp : <?= $user['no_hp'];?> </li>
      </ul>
      <div class="card-body">
        <?php $email1 = $user['email']; ?>
        <a href="<?= base_url('Profil/edit_profil');?>" class="card-link"> Edit</a>

      </div>
      </div>

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
