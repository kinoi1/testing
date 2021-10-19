
  <!-- HERO SECTION-->
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
      </br>
    </br>
        <div align="left">

          <script type="text/javascript">
            function print_d(){
              window.open("pdf_keuangan","_blank");
            }
          </script>
        </div>
      </br>
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
            <div class="table-responsive">

              <center>
                SISTEM PENJUALAN/PENYEWAAN ALAT OUTDOOR (SIPE'O) </br>
                Laporan Pendapatan </br>
              </center>
            </br>
              <table class="table">
                <tr>
                  <th>Tanggal</th>
                  <th>Nomor Transaksi </th>
                  <th>Nama Barang</th>
                  <th>Total </th>
                  <th>status</th>
                </tr>
                <?php
                $all = 0;
                foreach ($data as $row) {
                  ?>

                <tr>
                  <td><?= $row->tanggal;?></td>
                  <td><?= $row->id_transaksi; ?></td>
                  <td><?= $row->nama_barang;?></td>
                  <td><?= $row->total; ?></td>
                  <td><?= $row->status; ?></td>
                  <?php $all = $all + $row->total; ?>
                    </tr>

              <?php } ?>
              <tr>

                <td colspan="3" align="right">JUMLAH</td>
                <td>Rp. <?=$all?></td>
              </tr>
              </table>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div align="center">

 </div>
 <!-- JavaScript files-->
 <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/lightbox2/js/lightbox.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/nouislider/nouislider.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/owl.carousel2/owl.carousel.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/js/front.js') ?>"></script>
 <script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js');?>"></script>
 <script>
   // ------------------------------------------------------- //
   //   Inject SVG Sprite -
   //   see more here
   //   https://css-tricks.com/ajaxing-svg-sprite/
   // ------------------------------------------------------ //
   function injectSvgSprite(path) {

       var ajax = new XMLHttpRequest();
       ajax.open("GET", path, true);
       ajax.send();
       ajax.onload = function(e) {
       var div = document.createElement("div");
       div.className = 'd-none';
       div.innerHTML = ajax.responseText;
       document.body.insertBefore(div, document.body.childNodes[0]);
       }
   }
   // this is set to BootstrapTemple website as you cannot
   // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
   // while using file:// protocol
   // pls don't forget to change to your domain :)
   injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

 </script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){
    $("#Laporan"),change(function(){
      filter();
    });
  });

  function filter(){
    var laporan = $("#Laporan").val();
    $.ajax({
      url : "<?= base_url('Admin/lp_pemesanan');?>",
      data :"laporan" + laporan,
      success:function(data){

        $("#data_transaksi tbody").html(data);
      }
    })
  }
 </script>
 <script>
 	window.print();
 </script>
 <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 </div>
 </body>
 </html>
