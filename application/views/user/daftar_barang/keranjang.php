<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">Cart</h1>
        </div>

        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

    <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
    <div class="row">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <!-- CART TABLE-->
        <div class="table-responsive mb-4">
          <table class="table">
            <thead class="bg-light">
              <tr>

                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                <th class="border-0" scope="col"> </th>
              </tr>
            </thead>
              <?php echo form_error('id_barang','<small class=text-danger pl-3>','</small>'); ?>
              <?php  foreach ($barang as $row) :?>
            <tbody>

              <form action="<?= base_url('keranjang/GetKeranjangById');?>" method="post">

              <tr>
                <th class="pl-0 border-0" scope="row">
                  <div class="media align-items-center">

                    <input type="checkbox" name="id_barang[]" value="<?= $row['id_barang'];?>">
                    <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.html"><?= $row['name']; ?></a></strong>
                      <input type="hidden" name="name" value="<?= $row['name']; ?>">
                    </div>
                  </div>
                </th>
                <td class="align-middle border-0">
                  <input class="mb-0 small" id="sum" value="<?= $row['harga'];?>" onkeyup="sum()">

                </td>
                <td class="align-middle border-0">
                  <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                    <div class="quantity">
                      <a name="kurang" class="dec-btn p-0" onclick="sum()"><i class="fas fa-caret-left"></i></a>
                      <input type="number" class="form-control border-0 shadow-0 p-0" type="text" name="qty" id="sum" value="<?= $row['qty'] ;?>" >
                      <a name="tambah" class="inc-btn p-0"onclick="sum()"><i class="fas fa-caret-right"></i></a>
                  </div>
                  </div>
                </td>
                <td class="align-middle border-0" >
                  <?php  $total = $row['qty'] * $row['harga']; ?>
                  <input type="number" name="total" id="result" value="<?= $total;?>" >
                </td>
                <td class="align-middle border-0"><a class="reset-anchor" href="<?= base_url('Keranjang/delete/'.$row['id_keranjang']);?>"><i class="fas fa-trash-alt small text-muted"></i></a></td>
              </tr>
              <?php $id = $row['id_barang'] ?>
              <?php endforeach; ?>
              <section class="py-5">
            </tbody>
          </table>
        </div>
        <!-- CART NAV-->
        <div class="bg-light px-4 py-3">
          <div class="row align-items-center text-center">
            <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="<?= base_url('User/daftar_barang');?>"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
            <div class="col-md-6 text-md-right"><button class="btn btn-outline-dark btn-sm" href="">Procceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></button></div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>
