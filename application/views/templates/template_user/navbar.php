
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
              <!-- Link--><a class="nav-link" href="<?= base_url('User');?>">Home</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('user/daftar_barang'); ?>">Daftar Barang</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="<?= base_url('Transaksi');?>">Checkout</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</a>
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
              <?php  if(!$email){
                echo "<a class=dropdown-item border-0 transition-link href=".base_url('auth').">Login</a>";
              } else {
                  echo "<a class=dropdown-item border-0 transition-link href=".base_url('auth/logout').">Logout</a>";
              }?>

              <a class="dropdown-item border-0 transition-link" href="checkout.html">About</a></div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('Keranjang'); ?>"> <i class="fas fa-dolly-flatbed mr-1 text-gray">

            </i>Cart</a></li>
            <li class="nav-item"><a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="nav-link">Profile</i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="<?= base_url('profil/profil_user');?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <?php  if(!$email): ?>
              <a href="<?= base_url('auth');?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Login</p>
                  <?php ;else: ?>
                    <a href="<?= base_url('auth/logout');?>" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar-today text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1 text-small">Logout</p>
                      <?php endif; ?>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </header>
</div>
