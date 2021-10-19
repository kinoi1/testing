
<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">Checkout</h1>
        </div>

        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <?= form_open_multipart('Admin/aksi_resi/');?>

                <div class="form-group">
                  <div class="mb-3">
                  <label for="formFile" class="form-label"><h4>Code Resi</h4></label>
                  <input name="resi" class="form-control" type="text" id="formFile" >
                    <input name="id_transaksi" type="hidden" value="<?= $pengiriman['id_transaksi']; ?>">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>

              <?= form_close()?>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">

    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <!-- CART TABLE-->
        <div class="table-responsive mb-4">




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
