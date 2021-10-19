
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
      <div class="col-lg-12">
        <div class="card ">
          <div class="card-header">
            <h4>Daftar akun</h4>
          </div>
          <div class="card-body ">
            <div class="table-responsive ">
              <table class="table table-sm">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Password</th>
                    <th>Role_id</th>
                    <th>Day created</th>
                    <th>Aksi</th>
                  </tr>
                <?php
                $count = 0;
                $i = 0;
                $role = 0;
                foreach ($data_akun as $row){
                        $count = $count + 1;

                 ?>
                 <tr>
                   <td><?php echo $count ; ?></td>
                   <td><?php echo $row->name ;?></td>
                   <td><?php echo $row->email ;?></td>
                   <td><?php echo $row->tgl_lahir ;?></td>
                   <td><?php echo $row->alamat ;?></td>
                   <td><?php echo $row->no_hp ;?></td>
                   <td><?php echo $row->password ;?></td>
                   <?php $row->role_id ?>
                   <?php $role = $row->role_id;
                   if ($role == 1){
                        echo "<td>Admin</td>";
                  }else {

                    echo "<td> User</td>";
                  }

                   ?>

                   <td><?php echo $row->day_created ;?></td>
                   <td><a href="<?= base_url('Admin/update/').$row->id; ?> " >Edit </a>
                    <a href="<?= base_url('Admin/delete/'.$row->id); ?>" onclick="JavaScript: return confirm('Anda yakin hapus?')"><span class="glyphicon glyphicon-trash" >Hapus</span></a>

                 </tr>
              <?php } ?>

              </table>

            </div>
          </div>
        </div>
      </div>
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
