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

