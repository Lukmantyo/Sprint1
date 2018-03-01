<!DOCTYPE HTML>
<!--
  Aesthetic by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tiket Pesawat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="GetTemplates.co" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>gudang/traveler/css/style.css">

  <!-- Modernizr JS -->
  <script src="<?php echo base_url(); ?>gudang/traveler/gudang/traveler/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

  <div class="gtco-loader"></div>
  
  <div id="page">


    <!-- <div class="page-inner"> -->
      <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">

          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <div id="gtco-logo"><a href="<?php echo base_url(); ?>">Tiket Pesawat <em>.</em></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
              <ul>
                <li><a href="<?php echo base_url(); ?>welcome/rute">Rute</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/login">Login</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/contact/">Contact</a></li>
              </ul> 
            </div>
          </div>

        </div>
      </nav>

      <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(gudang/traveler/images/img_bg_2.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
              <div class="row row-mt-15em">
                <div class="col-md-12 mt-text animate-box form-wrap" data-animate-effect="fadeInUp">
                  <h1>Isi data diri & Tempat duduk</h1>  
                  
                  <div class="form-wrap">
                    <div class="tab" style="margin-top: 20px">
                      <div class="tab-content" style="bottom: 30px; border-bottom:100px; "> 
                        <div class="tab-content-inner active" data-content="signup">

                          <div class="row">
                            <div class="col-md-6">
                              <h3>Data Diri</h3>
                              <form action="<?php echo base_url('welcome/reservasi'); ?>" method="post">
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <label for="name">Nama</label>
                                    <input type="hidden" name="idrute" value="<?php echo $idrute; ?>">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Massukan Namamu" required>
                                  </div>
                                </div>

                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <label for="addr">Alamat</label>
                                    <input type="text" name="addr" id="addr" class="form-control" placeholder="Massukan Alamat Rumah mu" required>
                                  </div>
                                </div>

                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <label for="phone">No. Telepon</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Massukan Nomor Telepon" required>
                                  </div>
                                </div>

                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Massukan Emailmu" required>
                                  </div>
                                </div>
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <label for="gender">Jenis Kelamin</label>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="gender"><input type="radio" name="gender" id="gender" required value="1"> Laki - Laki</label>
                                    <label for="gender"><input type="radio" name="gender" id="gender" required value="0"> Perempuan</label>
                                  </div>
                                </div>

                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="Cari">
                                  </div>
                                </div>

                              </div>
                              <div class="col-md-6">
                                <h3>Tempat Duduk</h3>
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <?php for ($i=1; $i <= $seat; $i++):?> 
                                        <div class="col-md-2">
                                          <label for="seat"><input type="radio" name="seat" value="<?php echo $i; ?>" required><?php echo $i; ?></label>
                                        </div>
                                      <?php endfor; ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form> 
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="gtco-section">
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
              <h2>Destinasi Populer</h2>
              <p>Berisikan beberapa destinasi liburan atau bepergian favorit para turis. Berikut destinasinya :</p>
            </div>
          </div>
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/rajaampat.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/rajaampat.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Raja Ampat, Papua</h2>
                  <p>Destinasi yang terkenal dengan keindahan lautnya.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/bali.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/bali.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Pulau Bali, Bali</h2>
                  <p>Destinasi liburan yang terkenal di dunia. Dengan keindahan laut serta budaya.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/yogja.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/yogya.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Yogyakarta, Indonesia</h2>
                  <p>Kota dengan budaya Jawa yang sangat kental.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/baturaden.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/baturaden.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Baturraden, Purwokerto</h2>
                  <p>Wisata alam yang terletak di kaki Gunung Slamet.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/jakarta.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/jakarta.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Jakarta, Ibu Kota Jakarta</h2>
                  <p>Ibukota Indonesia, kota metropolitan terbesar di Indonesia.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
              <a href="<?php echo base_url(); ?>gudang/traveler/images/gunungbromo.jpg" class="fh5co-card-item image-popup">
                <figure>
                  <div class="overlay"><i class="ti-plus"></i></div>
                  <img src="<?php echo base_url(); ?>gudang/traveler/images/gunungbromo.jpg" alt="Image" class="img-responsive">
                </figure>
                <div class="fh5co-text">
                  <h2>Gunung Bromo, Jawa Timur</h2>
                  <p>Wisata dengan gunung yang terkenal saat matahari terbitnya.</p>
                  <p><span class="btn btn-primary">Jadwalkan Perjalanan</span></p>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>

      <div id="gtco-features">
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
              <h2>Cara Booking</h2>
              <p>Berikut adalah cara untuk booking melalui website kami</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="feature-center animate-box" data-animate-effect="fadeIn">
                <span class="icon">
                  <i>1</i>
                </span>
                <h3>Isi Data Pada Booking Perjalanan</h3>
                <p>Isi Booking Perjalanan dengan data diri anda yang valid. Isikan juga tanggal keberangkatan yang ingin anda booking.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="feature-center animate-box" data-animate-effect="fadeIn">
                <span class="icon">
                  <i>2</i>
                </span>
                <h3>Konfirmasi Data</h3>
                <p>Setelah menekan tombol 'Submit', akan muncul halaman berisikan data diri yang telah anda masukkan. Apabila sudah benar tekan 'OK' jika belum, tekan 'Cancel'.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="feature-center animate-box" data-animate-effect="fadeIn">
                <span class="icon">
                  <i>3</i>
                </span>
                <h3>Pembayaran dan Pemberangkatan</h3>
                <p>Jika semua data telah benar, anda akan masuk ke laman pembayaran untuk membayar tiket yang telah dibooking. Setelah itu anda dapat berlibur tanpa khawatir !</p>
              </div>
            </div>


          </div>
        </div>
      </div>


      <div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container text-center">
          <div class="display-t">
            <div class="display-tc">
              <h1>Kami memiliki servis berkualitas tinggi yang mungkin anda sukai !</h1>
            </div>  
          </div>
        </div>
      </div>

      <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
              <h2>Kesuksesan Kami</h2>
              <p>Agen kami telah mencatatkan banyak kesuksesan dalam perjalanan. Prioritas kami adalah kesenangan pelanggan dan keselamatan perjalanan.</p>
            </div>
          </div>

          <div class="row">

            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
              <div class="feature-center">
                <span class="counter js-counter" data-from="0" data-to="57" data-speed="5000" data-refresh-interval="50">1</span>
                <span class="counter-label">Rute</span>

              </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
              <div class="feature-center">
                <span class="counter js-counter" data-from="0" data-to="69" data-speed="5000" data-refresh-interval="50">1</span>
                <span class="counter-label">Hotel</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
              <div class="feature-center">
                <span class="counter js-counter" data-from="0" data-to="15678" data-speed="5000" data-refresh-interval="50">1</span>
                <span class="counter-label">Jumlah Turis</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
              <div class="feature-center">
                <span class="counter js-counter" data-from="0" data-to="9000" data-speed="5000" data-refresh-interval="50">1</span>
                <span class="counter-label">Pelanggan yang Senang</span>

              </div>
            </div>

          </div>
        </div>
      </div>

      <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
          <div class="row row-p b-md">

            <div class="col-md-4">
              <div class="gtco-widget">
                <h3>Tentang Kami</h3>
                <p>Website ini dibuat semata-mata untuk persiapan UKK. Saya sangat berterima kasih kepada seluruh pihak yang terlibat, terutama teman sekelas dan guru kami. Serta kepada pembuat template ini.
                oleh Muhammad Lukman R.</p>
              </div>
            </div>

            <div class="col-md-2 col-md-push-1">
              <div class="gtco-widget">
                <h3>Rute</h3>
                <ul class="gtco-footer-links">
                  <li><a href="<?php echo base_url(); ?>gudang/traveler/eropa.html">Eropa</a></li>
                  <li><a href="<?php echo base_url(); ?>gudang/traveler/asia.html">Asia</a></li>
                  <li><a href="<?php echo base_url(); ?>gudang/traveler/lokal.html">Lokal</a></li>
                  <li><a href="<?php echo base_url(); ?>gudang/traveler/lainnya.html">Lainnya</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-md-push-1">
              <div class="gtco-widget">
                <h3>Hotels</h3>
                <ul class="gtco-footer-links">
                  <li><a href="#">Hotel Aston</a></li>
                  <li><a href="#">Hotel Orlando</a></li>
                  <li><a href="#">Winterspell Hotel</a></li>
                  <li><a href="#">Landreic Hotel</a></li>
                  <li><a href="#">HuraHura Hotel</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-md-push-1">
              <div class="gtco-widget">
                <h3>Get In Touch</h3>
                <ul class="gtco-quick-contact">
                  <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                  <li><a href="#"><i class="icon-mail2"></i> lukmantyo26@gmail.com</a></li>
                  <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                </ul>
              </div>
            </div>

          </div>

          <div class="row copyright">
            <div class="col-md-12">
              <p class="pull-left">
                <small class="block">&copy; 2018 Tiket Pesawat. All Rights Reserved.</small> 
                <small class="block">Designed by <a href="http://GetTemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
              </p>
              <p class="pull-right">
                <ul class="gtco-social-icons pull-right">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
              </p>
            </div>
          </div>

        </div>
      </footer>
      <!-- </div> -->

    </div>

    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.countTo.js"></script>

    <!-- Stellar Parallax -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.stellar.min.js"></script>

    <!-- Magnific Popup -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>gudang/traveler/js/magnific-popup-options.js"></script>

    <!-- Datepicker -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/bootstrap-datepicker.min.js"></script>


    <!-- Main -->
    <script src="<?php echo base_url(); ?>gudang/traveler/js/main.js"></script>

  </body>
  </html>

