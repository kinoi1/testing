
<div class="page-holder">
  <!-- navbar-->
  <header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Project 2</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('guest');?>">Home</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('auth'); ?>">Daftar Barang</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('auth') ?>">Pembayaran</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</a>
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
              <a class="dropdown-item border-0 transition-link" href="<?= base_url('auth') ?>">Info Tour Guide</a>
              <a class="dropdown-item border-0 transition-link" href="cart.html">checkout</a>
              <a class="dropdown-item border-0 transition-link" href="checkout.html">About</a></div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('User/keranjang'); ?>"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart</a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-user-alt mr-1 text-gray"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
