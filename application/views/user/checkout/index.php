
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
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <h2 class="h5 text-uppercase mb-4">Detail</h2>
    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <!-- CART TABLE-->
        <div class="table-responsive mb-4">
          <table class="table">
            <thead class="bg-light">
              <tr>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">QTY</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                <th class="border-0" scope="col" > <strong class="text-small text-uppercase">Status</strong></th>
                <th class="border-0" scope="col"> </th>
              </tr>
            </thead>
              <?php  foreach ($barang as $row) :?>
            <tbody>
              <form action="<?= base_url('keranjang/GetKeranjangById');?>" method="post">
              <tr>
                <th class="pl-0 border-0" scope="row">
                  <div class="media align-items-center">

                    <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link"
                      href="<?= base_url('transaksi/detail/'.$row['id_transaksi']);?>"><?= $row['nama_barang']; ?></a></strong>
                      <input type="hidden" name="name" value="<?= $row['nama_barang']; ?>">
                      <input type="hidden" name="id_transaksi" value="<?=$row['id_transaksi']?>">
                    </div>
                  </div>
                </th>
                <td class="align-middle border-0">
                  <div class="media align-items-center">
                    <div class="media-body ml-3"><strong class="h6"><?= $row['qty']; ?></strong>
                    </div>
                  </div>
                </td>
                <td class="align-middle border-0" >
                  <div class="media align-items-center">
                    <div class="media-body ml-3"><strong class="h6"><?= $row['total']; ?></strong>
                      <input type="hidden" name="name" value="<?= $row['total']; ?>">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="media align-items-center">
                    <div class="media-body ml-3"><strong class="h6"><?= $row['status']; ?></strong>
                    </div>
                  </div>
                </td>
                <td class="align-middle border-0"><a class="reset-anchor" href=""><i class="fas fa-trash-alt small text-muted"></i></a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
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
      <!-- ORDER TOTAL-->
    <!--  <div class="col-lg-4">
        <div class="card border-0 rounded-0 p-lg-4 bg-light">
          <div class="card-body">
            <h5 class="text-uppercase mb-4">Cart total</h5>
            <ul class="list-unstyled mb-0">
              <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">$250</span></li>
              <li class="border-bottom my-2"></li>
              <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>$250</span></li>
              <li>
                <form action="#">
                  <div class="form-group mb-0">
                    <input class="form-control" type="text" placeholder="Enter your coupon">
                    <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Apply coupon</button>
                  </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>-->
    </div>
  </section>
</div>
