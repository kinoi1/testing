<div class="page-holder">
  <!-- navbar-->

  <header class="header bg-white">
    <div class="container px-0 px-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Project 2</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <?php  //foreach ($subMenu as $sm) : ?>
              <!-- Link--><a class="nav-link active" href="<?= base_url('admin'); ?>">Home</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('Barang'); ?>">Daftar barang</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('Admin/lp_orders');?>">Order</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</a>
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
              <a class="dropdown-item border-0 transition-link" href="<?= base_url('Admin/daftar_akun'); ?>">daftar akun</a>
              <a class="dropdown-item border-0 transition-link" href="<?= base_url('Admin/lp_pemesanan');?>">Laporan</a>
              <a class="dropdown-item border-0 transition-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="cart.html"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">(2)</small></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/profil_admin');?>"> <i class="fas fa-user-alt mr-1 text-gray"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
