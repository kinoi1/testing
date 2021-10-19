<div class="page-holder">
  <!-- navbar-->
  <header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Login</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('guest'); ?>">Home</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" data-toggle="modal" data-target="#mylogin"><a class="nav-link" href="#"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
          </ul>
        </div>
      </nav>
      <div id="mylogin" class="modal fade" role="dialog">
          <div class="modal-dialog">
          <!-- Modal content-->
          </div>
         </div>
        </div>
      </div>
    </div>
    </div>
  </header>
  <!--  Modal -->
  <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center"
               style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview"
               title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
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
  <div class="container">
    <!-- HERO SECTION-->

    <section class="py-5">
      <!-- BILLING ADDRESS-->
          <!-- Outer Row -->
          <div class="row justify-content-center">

              <div class="col-lg-6">

                  <div class="card o-hidden border-0 shadow-lg my-5">
                      <div class="card-body p-0">
                          <!-- Nested Row within Card Body -->
                          <div class="row">

                              <div class="col-lg">
                                  <div class="p-5">
                                    <?= $this->session->flashdata('message');?>
                                      <form class="user" method="post" action="<?= base_url('auth') ?>">
                                          <div class="form-group">
                                              <input type="text" class="form-control form-control-user"
                                                  id="email" name="email"
                                                  placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                                  <?php echo form_error('email','<small class=text-danger pl-3>','</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <input type="password" class="form-control form-control-user"
                                                  id="password" name="password" placeholder="Password" value="<?= set_value('email'); ?>">
                                                    <?php echo form_error('password','<small class=text-danger pl-3>','</small>'); ?>
                                          </div>

                                          <button type="submit" class="btn btn-dark ">
                                              Login
                                          </button>


                                      </form>
                                      <hr>
                                      <div class="text-center">
                                          <a class="small" href="forgot-password.html">Forgot Password?</a>
                                      </div>
                                      <div class="text-center">
                                          <a class="small" href="<?php echo base_url('auth/register'); ?>">Create an Account!</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

        <!-- ORDER SUMMARY-->
      </div>
    </section>
  </div>
