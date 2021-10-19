
<!--  Ini adalah halaman Dashboard guest yang akan pertama kali muncul -->

  <!--  Modal -->
  <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="<?php echo base_url('assets/img/product-5.jpg') ?>" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
            <div class="col-lg-6">
              <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="p-5 my-md-4">
                <ul class="list-inline mb-2">
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                </ul>
                <h2 class="h4">Red digital smartwatch</h2>
                <p class="text-muted">$250</p>
                <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                <div class="row align-items-stretch mb-4">
                  <div class="col-sm-7 pr-sm-0">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                      <div class="quantity">
                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Basic Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <form class="" action="<?= base_url('Admin/aksi_tambah'); ?>" method="post">
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name"</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email"</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tgl_lahir"</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"</td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password"</td>
                  </tr>
                  <tr>
                    <td>Role_id</td>
                    <td>:</td>
                    <td><input type="text" name="role_id"</td>
                  </tr>
                  <tr>
                    <td>Is_Aktive</td>
                    <td>:</td>
                    <td><input type="text" name="is_active"</td>
                  </tr>
                  <tr>
                    <td><input type="submit" value="Simpan"></td>
                  </tr>
                </form>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- CATEGORIES SECTION-->
        <!-- PRODUCT-->

        <!-- PRODUCT-->

    <!-- SERVICES-->

    <!-- NEWSLETTER-->
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
