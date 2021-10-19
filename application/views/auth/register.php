<div class="page-holder">
  <!-- navbar-->
  <!--  Modal -->
  <div class="container">
    <!-- HERO SECTION-->

    <section class="py-5">
      <!-- BILLING ADDRESS-->
      <h2 class="h5 text-uppercase mb-4">Create Your Account</h2>
      <div class="row">
        <div class="col-lg-8">
          <form action="<?= base_url('auth/register'); ?>" method="post">
            <div class="row">
              <div class="col-lg-6 form-group">
                <label class="text-small text-uppercase" for="name">Name</label>
                <input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="Enter your name"
                value="<?= set_value('name'); ?>">
                  <?= form_error('name','<small class=text-danger pl-3>','</small>'); ?>
              </div>
              <div class="col-lg-6 form-group">
                <label class="text-small text-uppercase" for="tgl">Tanggal Lahir</label>
                <input class="form-control form-control-lg" id="lastName" name="tanggal" type="text" value="<?= set_value('tanggal'); ?>" >

              </div>
              <div class="col-lg-6 form-group">
                <label class="text-small text-uppercase" for="email">Email</label>
                <input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="Jason@example.com" value="<?= set_value('email'); ?>">
                <?php echo form_error('email','<small class=text-danger pl-3>','</small>'); ?>

              </div>
              <div class="col-lg-6 form-group">
                <label class="text-small text-uppercase" for="phone">No. HP</label>
                <input class="form-control form-control-lg" id="phone" name="hp" type="text" placeholder="e.g. 08xxx" value="<?= set_value('no_hp'); ?>">
              </div>
              <div class="col-lg-12 form-group">
                <label class="text-small text-uppercase" for="alamat">Alamat</label>
                <input class="form-control form-control-lg" id="alamat" name="alamat" type="text" placeholder="e.g. Jln.jendral sudirman" value="<?= set_value('alamat'); ?>">
                <?php echo form_error('alamat','<small class=text-danger pl-3>','</small>'); ?>
              </div>
              <div class="col-lg-6 form-group">
                <label class="text-small text-uppercase" for="address">Password</label>
                <input class="form-control form-control-lg" id="password" name="password" type="password">
                <?php echo form_error('password','<small class=text-danger pl-3>','</small>'); ?>
              </div>
              <div class="col-lg-12 form-group">
                <button class="btn btn-dark" type="submit">Submit</button>
              </div>
              <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                  <a class="small" href="<?php echo base_url('auth'); ?>">Do you have Account?</a>
              </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- ORDER SUMMARY-->
      </div>
    </section>
  </div>
</div>
