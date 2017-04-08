<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>Shop quần áo nhóm 10</title>
  <!-- slide_1 -->
  <link href="{{ url('public/frontend/slide_1/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{ url('public/frontend/slide_1/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ url('public/frontend/slide_1/css/animate.css') }}" rel="stylesheet">
  <link href="{{ url('public/frontend/slide_1/css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ url('public/frontend/slide_1/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('public/frontend/slide_1/css/responsive.css') }}" rel="stylesheet">

  <!-- chat css -->
  <link href="{{ url('public/frontend/css/chat.css') }}" rel="stylesheet">
  <!-- Font awesome -->
  <link href="{{ url('public/frontend/css/font-awesome.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ url('public/frontend/css/bootstrap.css') }}" rel="stylesheet">   
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="{{ url('public/frontend/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/jquery.simpleLens.css') }}">    
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/slick.css') }}">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/nouislider.css') }}">
  <!-- Theme color -->
  <link id="switcher" href="{{ url('public/frontend/css/theme-color/green-theme.css') }}" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
  <!-- Top Slider CSS -->
  <link href="{{ url('public/frontend/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="{{ url('public/frontend/css/style.css') }}" rel="stylesheet">    

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href="{{ url('public/frontend/magiczoomplus/magiczoomplus.css') }}" rel="stylesheet">
  <script src="{{ url('public/frontend/magiczoomplus/magiczoomplus.js') }}"></script>
  
  <!-- chat component -->
</head>
<body>      
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <header id="aa-header">
      <!-- start header top  -->
      <div class="aa-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">
                <!-- start header top left -->
                <div class="aa-header-top-left">
                  <!-- start language -->

                  <div class="cellphone hidden-xs">
                    <p>Thương mại điện tử</p>
                  </div>
                  <!-- / language -->

                  <!-- start cellphone -->
                  <div class="cellphone hidden-xs">
                    <p><span class="fa fa-phone"></span>012-1918-7548</p>
                  </div>
                  <!-- / cellphone -->
                </div>
                <!-- / header top left -->
                <div class="aa-header-top-right">
                  <ul class="aa-head-top-nav-right">
                    @if (Auth::check())
                    <li class="hidden-xs"><strong>{{ Auth::user()->name }}</strong></li>
                      @if (Auth::user()->loainguoidung_id != 2)
                        <li class="hidden-xs"><a href="{{ url('/admin/bang-dieu-khien') }}">Bảng đk</a></li>
                      @else
                        <?php 
                          $kh = DB::table('khachhang')->where('user_id',Auth::user()->id)->first();
                          ?>
                        <li class="hidden-xs"><a href="{{ url('/donhanguser',[$kh->id]) }}">Đơn hàng</a></li>
                      @endif
                      <li class="hidden-xs"><a href="{{ url('/logout') }}">Thoát</a></li>
                    @else
                    <li class="hidden-xs"><a href="{{ url('/register') }}">Đăng kí</a></li>
                    <li class="hidden-xs"><a href="{{ url('/login') }}">Đăng nhập</a></li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header top  -->

      <div class="aa-header-bottom" >
        <div class="container">
          <div class="row" style="position: relative;">
            <div class="col-md-12">
              <div class="aa-header-bottom-area">
                <!-- Support section -->
                <!-- start header bottom  -->
                <!-- logo  -->
                <div class="aa-logo">
                  <!-- Text based logo -->
                  <a href="{!! URL('/') !!}">
                    <span class="fa fa-shopping-cart"></span>
                    <p> Shop Quần áo <strong>Nhóm 10</strong> <span>Good cloths - Good life</span></p>
                  </a>
                  <!-- img based logo -->
                  <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                </div>
                <!-- / logo  -->
                <!-- cart box -->
                <div class="aa-cartbox">
                  <a class="aa-cart-link" href="{!! url('gio-hang') !!}">
                    <span class="fa fa-shopping-basket"></span>
                    <span class="aa-cart-title">GIỎ HÀNG</span>
                    <span class="aa-cart-notify">
                      <?php 
                      $count = Cart::count(); 
                      print_r($count);
                      ?>
                    </span>
                  </a>
                </div>

                <!-- / cart box -->
                <!-- search box -->
                @include('frontend.blocks.search')
                <!-- / search box -->     
                
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- / header bottom  -->
    </header>
    <section id="menu">
      <div class="container">
        <div class="row">  
          <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>          
              </div>
              <!-- Start menu -->
              @include('frontend.blocks.menu')
              <!-- End menu -->
            </div>
          </div>
        </div>       
      </div>
    </section>
    @yield('content')
    <!-- / Content pages -->

    <!-- / product category -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('public/frontend/js/bootstrap.js') }}"></script>  
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.smartmenus.js') }}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.smartmenus.bootstrap.js') }}"></script>  
    <!-- To Slider JS -->
    <script src="{{ url('public/frontend/js/sequence.js') }}"></script>
    <script src="{{ url('public/frontend/js/sequence-theme.modern-slide-in.js') }}"></script>  
    <!-- Product view slider -->
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.simpleGallery.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/js/jquery.simpleLens.js') }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ url('public/frontend/js/slick.js') }}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ url('public/frontend/js/nouislider.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ url('public/frontend/js/custom.js') }}"></script> 

    <!-- My scripts -->
    <script src="{{ url('public/frontend/js/myscript.js') }}"></script> 
    

    <!-- slide_1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{ url('public/frontend/slide_1/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/frontend/slide_1/js/jquery.nivo.slider.pack.js') }}"></script>
    <script src="{{ url('public/frontend/slide_1/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/frontend/slide_1/js/main.js') }}"></script>
    
    @include('frontend.blocks.chat')
    
    <script type="text/javascript">
      /* Main Slideshow */
      $(window).load(function() {
        $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
          $('.ma-banner7-container .timethai').addClass('pos_hover');
        });
        $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
          $('.ma-banner7-container .timethai').removeClass('pos_hover');
        });
      });
      $(window).load(function() {
        $('#ma-inivoslider-banner7').nivoSlider({
          effect: 'random',
          slices: 15,
          boxCols: 8,
          boxRows: 4,
          animSpeed: 1000,
          pauseTime: 6000,
          startSlide: 0,
          controlNav: false,
          controlNavThumbs: false,
          pauseOnHover: true,
          manualAdvance: false,
          prevText: 'Prev',
          nextText: 'Next',
          afterLoad: function(){
          },     
          beforeChange: function(){ 
          }, 
          afterChange: function(){ 
          }
        });
      });
      $(document).ready(function(){
        /* timely-owl */
        $("#timely-owl .owl").owlCarousel({
          autoPlay : false,
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [991,1],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 1000,
          paginationSpeed : 1000,
          rewindSpeed : 1000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
        /* special-offer slider */
        $("#special-offer .owl").owlCarousel({
          autoPlay : false,
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [991,1],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 3000,
          paginationSpeed : 3000,
          rewindSpeed : 3000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
        /* latest-news slider */
        $("#latest-news .owl").owlCarousel({
          autoPlay : false,
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [991,1],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 1000,
          paginationSpeed : 1000,
          rewindSpeed : 1000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
        /* clients-say slider */
        $("#clients-say .owl").owlCarousel({
          autoPlay : false,
          items : 1,
          itemsDesktop : [1199,1],
          itemsDesktopSmall : [991,1],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 3000,
          paginationSpeed : 3000,
          rewindSpeed : 3000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
        /* featured-products slider */
        $("#featured-products .owl").owlCarousel({
          autoPlay : false,
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [991,2],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 3000,
          paginationSpeed : 3000,
          rewindSpeed : 3000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
        /* new-products slider */
        $("#new-products .owl").owlCarousel({
          autoPlay : false,
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [991,2],
          itemsTablet: [767,2],
          itemsMobile : [480,1],
          slideSpeed : 3000,
          paginationSpeed : 3000,
          rewindSpeed : 3000,
          navigation : true,
          stopOnHover : true,
          pagination : false,
          scrollPerPage:true,
        });
      });
    </script>
  </body>
  </html>