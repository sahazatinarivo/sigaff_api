<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>FICHE ECOLE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/theme/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/theme/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url(); ?>/assets/theme/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/theme/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="<?php echo base_url(); ?>/assets/theme/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="<?php echo base_url(); ?>assets/tabulation/css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Caisse ecole</a></li>
                           <li><a href="#">Cantine scolaire</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="<?php echo base_url(); ?>/assets/theme/images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="row">
                  <div class="col-xs-0 col-sm-0 col-md-2"></div>
                  <div class="col-xs-12 col-sm-12 col-md-8">
                     <div class="containt_main">
                        <div class="main">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Rechercher">
                              <div class="input-group-append">
                                 <button class="btn btn-danger" type="button" style="background-color: red; border-color:red ">
                                 <i class="fa fa-search"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-0 col-sm-0 col-md-2"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner bg main end -->
      <?php
          $_fvue = (isset($_vue) && file_exists(dirname(__FILE__) . "/_views/fe_".$_vue.".php") ? "_views/fe_".$_vue.".php" : "no-vue.php");
          include $_fvue;
      ?> 
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo base_url(); ?>/assets/theme/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/theme/js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/theme/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/theme/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/theme/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url(); ?>/assets/theme/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/theme/js/custom.js"></script>

      <script src="<?php echo base_url(); ?>assets/tabulation/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/tabulation/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url(); ?>assets/tabulation/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url(); ?>assets/tabulation/js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url(); ?>assets/tabulation/js/demo/chart-area-demo.js"></script>
      <script src="<?php echo base_url(); ?>assets/tabulation/js/demo/chart-pie-demo.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>