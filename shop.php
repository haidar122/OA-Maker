<?php  
require_once("koneksi.php");

$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OA MAKER</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox-->
  <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <!-- Bootstrap select-->
  <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- Owl Carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
  <!-- Google fonts-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
      <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span
              class="font-weight-bold text-uppercase text-dark">OA MAKER</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <!-- Link--><a class="nav-link active" href="index.html">Beranda</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="shop.html">Katalog</a>
              </li>

              <li class="nav-item">
              <!-- Link--><a class="nav-link" href="about.html">Tentang kami</a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="checkout.html"> <i
                    class="fas fa-dolly-flatbed mr-1 text-gray"></i>Pesan<small class="text-gray"></small></a></li>
              <li class="nav-item"><a class="nav-link" href="login.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login
                  Admin</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!--  Modal -->
    <?php foreach ($result as $key => $value) {
      echo '
      <div class="modal fade" id="productView'.$key.'" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center"
                  style="background: url('.$value['foto'].')"></a></div>
              <div class="col-lg-6">
                <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
                <div class="p-5 my-md-4">

                  <h2 class="h4">'.$value['nama'].'</h2>
                  <p class="text-muted">Rp.'.number_format($value['harga']).',-</p>
                  <p class="text-small mb-4">'.$value['deskripsi'].'</p>
                  <div class="row align-items-stretch mb-4">
                    <div class="col-sm-4 pr-sm-0">

                    </div>
                    <div class="col-sm-5 pl-sm-0"><a
                        class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"
                        href="checkout.html">Pesan</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
    } ?>
   
    <div class="container">
      <!-- HERO SECTION-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h2 text-uppercase mb-0">Katalog</h1>
            </div>
            <div class="col-lg-6 text-lg-right">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                  <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Katalog</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <div class="container p-0">
          <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
              <h5 class="text-uppercase mb-4">Kategori</h5>
              <div class="py-2 px-4 bg-dark text-white mb-3"><strong
                  class="small text-uppercase font-weight-bold">Produk</strong></div>
              <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                <li class="mb-2"><a class="reset-anchor">Souvenir</a></li>
                <li class="mb-2"><a class="reset-anchor">Cetak</a></li>
                <li class="mb-2"><a class="reset-anchor">Sablon</a></li>
                <li class="mb-2"><a class="reset-anchor">Accessories</a></li>
              </ul>

            </div>
            <!-- SHOP LISTING-->
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">

              <div class="row">
                <!-- PRODUCT-->
                <?php foreach ($result as $key => $value) {
                  echo '
                  <div class="col-lg-4 col-sm-6" style="min-height: 302px; max: height 302px;">
                  <div class="product text-center">
                    <div class="mb-3 position-relative">
                      <div class="badge text-white badge-"></div><a class="d-block" href="#"><img
                          class="img-fluid w-100" src="'.$value['foto'].'" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">

                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                              href="checkout.html">Pesan</a></li>
                          <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView'.$key.'"
                              data-toggle="modal"><i class="fas fa-expand"> Detail</i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="#">'.$value['nama'].'</a></h6>
                    <p class="small text-muted">Rp.'.number_format($value['harga']).',-</p>
                  </div>
                </div>';
                } ?>
      
              </div>
            </div>
          </div>
      </section>
    </div>
    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Hubungi kami</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#">E-mail : ghotiq.arie@gmail.com</a></li>
              <li><a class="footer-link" href="#">Telepon : 081238110656</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Follow kita</h6>
            <ul class="list-unstyled mb-0">
              <a class="footer-link" href="https://www.facebook.com/oamaker/"><img
                  src="https://img.icons8.com/fluency/40/000000/facebook-new.png" /></a>
              <a class="footer-link" href="https://www.instagram.com/oa_maker/"><img
                  src="https://img.icons8.com/color/40/000000/instagram-new--v1.png" /></a>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Alamat </h6>
            <ul class="list-unstyled mb-0">
              <a href="#" title="Image from freepnglogos.com"><img
                  src="https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-lokasi-saya-unduh-apk-untuk-android-aptoide-15.png"
                  width="35" alt="" /> Sabrang 02/08 Paripurno Salaman Magelang</a>
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-lg-6">
              <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
            </div>
            <div class="col-lg-6 text-lg-right">
              <p class="small text-muted mb-0">by <a class="text-white reset-anchor" href="#">OA MAKER</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Nouislider Config-->
    <script>
      var range = document.getElementById('range');
      noUiSlider.create(range, {
        range: {
          'min': 0,
          'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function (value) {
            return '$' + value;
          },
          from: function (value) {
            return value.replace('', '');
          }
        }
      });

    </script>
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
        ajax.onload = function (e) {
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
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
  <style>
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=6281238110656&amp;text=Halo%20Admin%20Mau%20Konsultasi" class="float"
    target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
</body>

</html>