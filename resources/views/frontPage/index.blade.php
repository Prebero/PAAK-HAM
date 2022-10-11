<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from createx.createx.studio/construction/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:25:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Createx | Construction Bureau - Home v.2</title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="Createx - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, construction, services, e-commerce, mobile app showcase, multipurpose, shop, ui kit, marketing, seo, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontPage/assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontPage/assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontPage/assets/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('frontPage/assets/img/site.webmanifest')}}">
    <link rel="mask-icon" color="#5bbad5" href="{{asset('frontPage/assets/img/safari-pinned-tab.svg')}}">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{asset('frontPage/assets/vendor/lightgallery.js/dist/css/lightgallery.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('frontPage/assets/vendor/simplebar/dist/simplebar.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('frontPage/assets/vendor/tiny-slider/dist/tiny-slider.css')}}"/>

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('frontPage/assets/css/demo/construction/theme.min.css')}}">
    
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #787a80;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #cfcfd1; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
    </style>

    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
    </script>

    <!-- Demo switcher offcanvas toggle styles -->
    <style>
      .demo-switcher {
        position: fixed;
        display: block;
        top: 50%;
        right: 1rem;
        z-index: 100;
      }
      .demo-switcher-inner {
        width: 3rem;
        height: 3rem;
        border: 1px solid #e5e8ed;
        border-radius: 50%;
        background-color: #fff;
        color: #1e212c;
        font-size: 1.25rem;
        line-height: 3rem;
        text-align: center;
        text-decoration: none;
        box-shadow: 0px 10px 15px 0px rgba(30,33,44,0.10);
      }
    </style>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>


  <!-- Body-->
  <body>

    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>

    <!-- Main content-->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper position-relative">


      <!-- Demo switcher offcanvas -->
      <div id="demo-switcher" class="offcanvas offcanvas-end">
        <div class="offcanvas-header d-block border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0">Choose Demo</h2>
            <button class="btn-close me-n1" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="d-flex pt-3">
            <a href="index.html" class="btn btn-sm btn-outline-secondary d-block w-100 my-0 me-2">
              <i class="ci-home fs-base me-1"></i>
              Main Page
            </a>
            <a href="components/typography.html" class="btn btn-sm btn-outline-secondary d-block w-100 my-0">
              <i class="ci-files fs-base me-1"></i>
              Docs / UI Kit
            </a>
          </div>
        </div>
        <div class="offcanvas-body pt-4 pb-3" data-simplebar data-simplebar-auto-hide="true">
          <a href="creative-agency/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="{{asset('frontPage/assets/img/demo-switcher/creative-agency.jpg')}}" class="d-block rounded-top mb-2" alt="Creative Agency">
            <h6 class="mb-0 pt-1 text-center">Creative Agency</h6>
          </a>
          <a href="ecommerce/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="{{asset('frontPage/assets/img/demo-switcher/ecommerce.jpg')}}" class="d-block rounded-top mb-2" alt="E-Commerce">
            <h6 class="mb-0 pt-1 text-center">E-Commerce</h6>
          </a>
          <a href="index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="{{asset('frontPage/assets/img/demo-switcher/construction.jpg')}}" class="d-block rounded-top mb-2" alt="Construction Bureau">
            <h6 class="mb-0 pt-1 text-center">Construction Bureau</h6>
          </a>
          <a href="seo-agency/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="{{asset('frontPage/assets/img/demo-switcher/seo-agency.jpg')}}" class="d-block rounded-top mb-2" alt="SEO & Marketing Agency">
            <h6 class="mb-0 pt-1 text-center">SEO &amp; Marketing Agency</h6>
          </a>
          <a href="online-courses/index.html" class="d-block heading-highlight shadow-sm rounded-bottom pb-3 mb-4">
            <img src="{{asset('frontPage/assets/img/demo-switcher/online-courses.jpg')}}" class="d-block rounded-top mb-2" alt="Online Courses">
            <h6 class="mb-0 pt-1 text-center">Online Courses</h6>
            
          </a>
        </div>
        <div class="offcanvas-footer flex-column border-top">
          <a href="#" class="btn btn-primary d-block w-100" target="_blank" rel="noopener">
            <i class="ci-cart mt-n1 me-2"></i>
            Buy Createx
          </a>
        </div>
      </div>

      
      <!-- Demo switcher offcanvas toggle -->
      <a href="#demo-switcher" class="demo-switcher" data-bs-toggle="offcanvas">
        <div class="demo-switcher-inner" data-bs-toggle="tooltip" data-bs-placement="left" title="Choose Demo">
          <i class="ci-layouts"></i>
        </div>
      </a>


      <!-- Navbar -->
      <!-- Remove .navbar-sticky class to detach .navbar from page scroll -->
      <header class="header navbar navbar-expand-lg navbar-light bg-light navbar-sticky navbar-floating">
        <div class="container px-0 px-xl-3">
          <a class="navbar-brand order-lg-1 me-lg-5 me-0 pe-lg-2" href="index.html">
            <img src="{{asset('frontPage/assets/img/construction/logo-dark.svg')}}" alt="Createx Logo" width="130">
            
          </a>
          <div class="d-flex align-items-center order-lg-3">
            <a class="navbar-tool d-flex" href="tel:(405)555-0128">
              <i class="navbar-tool-icon ci-iphone"></i>
              <div class="ms-2 ps-1">
                <h6 class="navbar-tool-title">Call us</h6>
                <span class="navbar-tool-label d-xl-inline-block d-none">(405) 555-0128</span>
              </div>
            </a>
            <a class="navbar-tool d-flex" href="mailto:hello@example.com">
              <i class="navbar-tool-icon ci-chat"></i>
              <div class="ms-2 ps-1">
                <h6 class="navbar-tool-title">Talk to us</h6>
                <span class="navbar-tool-label d-xl-inline-block d-none">hello@example.com</span>
              </div>
            </a>
            <button class="navbar-toggler ms-2 me-n3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1" aria-expanded="false">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse order-lg-2" id="navbarCollapse1">
            <ul class="navbar-nav me-auto text-nowrap">
                <a class="nav-link" href="#">Home</a>
              </li>
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('paak.about')}}">About</a></li>
                  <li><a class="dropdown-item" href="{{route('paak.contacts')}}">Contacts</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">News</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('paak.news')}}">News</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </header>


      <!-- Page content-->
      <!-- Hero slider -->
      <section class="tns-carousel-wrapper tns-controls-onhover min-vh-100 mb-4">
        <div class="tns-carousel-inner" data-carousel-options='{
          "navContainer": "#hero-pager",
          "responsive": {
            "0": {
              "controls": false
            },
            "1500": {
              "controls": true
            }
          }
        }'>

          <!-- Slide 1 -->
          <div class="d-flex min-vh-100 position-relative pt-6 bg-size-cover bg-position-center-top" style="background-image: url({{asset('frontPage/assets/img/construction/home/hero-alt/carousel/01.jpg')}});">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div>  
            <div class="position-relative container d-flex align-items-center text-light zindex-2">
              <div class="mt-md-n6" style="max-width: 595px;">
                <h1 class="display-1 text-uppercase text-light">
                  Create<span class="text-primary">x</span> construction
                </h1>
                <p class="mb-lg-5 pb-md-2 lead text-light">Are you looking for a reliable construction company to make your dream come true? Createx Construction Bureau is your best choice.</p>
                <a href="about.html" class="btn btn-lg btn-outline-light me-4 mb-3 text-uppercase">Learn more about us</a>
                <a href="contacts.html" class="btn btn-lg btn-primary me-4 mb-3 text-uppercase">Submit request</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="d-flex min-vh-100 position-relative pt-6 bg-size-cover bg-position-center-top" style="background-image: url({{asset('frontPage/assets/img/construction/home/hero-alt/carousel/02.jpg')}});">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div>   
            <div class="position-relative container d-flex align-items-center text-light zindex-2">
              <div class="mt-md-n6" style="max-width: 595px;">
                <h1 class="display-1 text-uppercase text-light">
                  Create<span class="text-primary">x</span> construction
                </h1>
                <p class="mb-lg-5 pb-md-2 lead text-light">Are you looking for a reliable construction company to make your dream come true? Createx Construction Bureau is your best choice.</p>
                <a href="about.html" class="btn btn-lg btn-outline-light me-4 mb-3 text-uppercase">Learn more about us</a>
                <a href="contacts.html" class="btn btn-lg btn-primary me-4 mb-3 text-uppercase">Submit request</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="d-flex min-vh-100 position-relative pt-6 bg-size-cover bg-position-center-top" style="background-image: url({{asset('frontPage/assets/img/construction/home/hero-alt/carousel/03.jpg')}});">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div> 
            <div class="position-relative container d-flex align-items-center text-light zindex-2">
              <div class="mt-md-n6" style="max-width: 595px;">
                <h1 class="display-1 text-uppercase text-light">
                  Create<span class="text-primary">x</span> construction
                </h1>
                <p class="mb-lg-5 pb-md-2 lead text-light">Are you looking for a reliable construction company to make your dream come true? Createx Construction Bureau is your best choice.</p>
                <a href="about.html" class="btn btn-lg btn-outline-light me-4 mb-3 text-uppercase">Learn more about us</a>
                <a href="contacts.html" class="btn btn-lg btn-primary me-4 mb-3 text-uppercase">Submit request</a>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="d-flex min-vh-100 position-relative pt-6 bg-size-cover bg-position-center-top" style="background-image: url({{asset('frontPage/assets/img/construction/home/hero-alt/carousel/04.jpg')}});">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div> 
            <div class="position-relative container d-flex align-items-center text-light zindex-2">
              <div class="mt-md-n6" style="max-width: 595px;">
                <h1 class="display-1 text-uppercase text-light">
                  Create<span class="text-primary">x</span> construction
                </h1>
                <p class="mb-lg-5 pb-md-2 lead text-light">Are you looking for a reliable construction company to make your dream come true? Createx Construction Bureau is your best choice.</p>
                <a href="about.html" class="btn btn-lg btn-outline-light me-4 mb-3 text-uppercase">Learn more about us</a>
                <a href="contacts.html" class="btn btn-lg btn-primary me-4 mb-3 text-uppercase">Submit request</a>
              </div>
            </div>
          </div>

        </div>

        <!-- Pager -->
        <div class="container position-relative mt-lg-n4">
          <div class="position-relative" style="max-width: 595px;">
            <div class="tns-pager pb-sm-4 pb-3" id="hero-pager">
              <button type="button" data-nav="0">01</button>
              <button type="button" data-nav="1">02</button>
              <button type="button" data-nav="2">03</button>
              <button type="button" data-nav="3">04</button>
            </div>
          </div>
        </div>
      </section>


      <!-- Presentation -->
      <section class="container mb-4 py-lg-6 py-5">
        <h2 class="h1 text-center">We are Createx Construction Bureau</h2>
        <p class="mb-lg-5 pb-3 fs-lg text-muted text-center">We are rightfully considered to be the best construction company in the USA.</p>
        <div class="position-relative bg-size-cover bg-position-center bg-repeat-0 text-center mb-0 py-sm-6 py-5 rounded overflow-hidden" style="background-image: url( {{asset('frontPage/assets/img/construction/home/video-cover.jpg')}});">
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div>   
          <div class="position-relative my-5 py-5 zindex-2">
            <a class="btn-video btn-video-lg my-3" href="https://www.youtube.com/watch?v=imtHMFpeAj8&amp;ab_channel=Unicoo" data-gallery-video></a>
            <div class="pt-1"></div>
          </div>
        </div>
      </section>


      <!-- Core values -->
      <section class="container position-relative">
        <h2 class="h1 text-center">Our core values</h2>
        <p class="mb-5 pb-3 fs-lg text-muted text-center">Our mission is to set the highest standards for construction sphere.</p>
        <div class="row g-0 pb-lg-6 pb-sm-5 pb-4">
          <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
              <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-like.svg')}}" width="48" alt="Icon box image">
              <h5 class="h5 mb-2">Quality</h5> 
              <p class="mb-0 text-muted">Culpa nostrud commodo ea consequat aliquip reprehenderit. Veniam velit nostrud aliquip sunt.</p>
            </div>
          </div>
          <span class="divider-vertical d-sm-block d-none"></span>
          <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
              <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-hand.svg')}}" width="48" alt="Icon box image">
              <h5 class="h5 mb-2">Safety</h5>
              <p class="mb-0 text-muted">Anim reprehenderit sint voluptate exercitation adipisicing laborum adipisicing. Minim empor est ea.</p>
            </div>
          </div>
          <span class="divider-vertical d-sm-block d-none"></span>
          <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
              <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-slippers.svg')}}" width="48" alt="Icon box image">
              <h5 class="h5 mb-2">Comfort</h5> 
              <p class="mb-0 text-muted">Sit veniam aute dolore adipisicing nulla sit culpa. Minim mollit voluptate ullamco proident ea ad.</p>
            </div>
          </div>
        </div>

        <div class="p-md-5 p-4 bg-light shadow-sm rounded">
          <h3 class="pb-2 text-center">Want to know more? Ask us a question:</h3>

          <!-- Question form -->
          <form class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="form-group mb-lg-0">
                <label for="question-name" class="form-label-lg">Name*</label>
                <input id="question-name" class="form-control" type="text" placeholder="Your name" required>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="form-group mb-lg-0">
                <label for="question-tel" class="form-label-lg">Phone</label>
                <input id="question-tel" class="form-control" type="tel" placeholder="Your phone">
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="form-group mb-sm-0">
                <label for="question-email" class="form-label-lg">Message*</label>
                <input id="question-email" class="form-control" type="text" placeholder="Your message" required>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6 d-flex align-items-end pt-sm-0 pt-4">
              <button type="submit" class="btn btn-primary d-block w-100">Send</button>
            </div>
          </form>
        </div>
      </section>


      <!-- Services -->
      <section {{route('paak.services')}}class="mt-md-n6 mt-n5 pt-md-6 pt-5 bg-secondary">
        <div class="container mt-4 pt-lg-6 py-5">
          <h2 class="h1 text-center">Our services</h2>
          <p class="mb-lg-5 pb-3 fs-lg text-muted text-center">Createx Construction Bureau is a construction giant with a full range of construction services.</p>
          <div class="row mb-lg-5 mb-4">
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
              <a class="image-fade h-100 card card-hover shadow py-3" href="services-single-v1.html" style="background-image: url( {{asset('frontPage/assets/img/construction/home/services/01.jpg')}});">
                <div class="image-inner py-5">
                  <div class="card-body">
                    <img class="inner-img d-block mx-auto mb-4" src=" {{asset('frontPage/assets/img/construction/icons/ic-construction.svg')}}" width="52" alt="Construction">
                    <h5 class="inner-text mb-0 text-center">Construction</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
              <a class="image-fade h-100 card card-hover shadow py-3" href="services-single-v1.html" style="background-image: url( {{asset('frontPage/assets/img/construction/home/services/02.jpg')}});">
                <div class="image-inner py-5">
                  <div class="card-body">
                    <img class="inner-img d-block mx-auto mb-4" src=" {{asset('frontPage/assets/img/construction/icons/ic-project.svg')}}" width="52" alt="Project Development">
                    <h5 class="inner-text mb-0 text-center">Project Development</h5>  
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
              <a class="image-fade h-100 card card-hover shadow py-3" href="services-single-v2.html" style="background-image: url({{asset('frontPage/assets/img/construction/home/services/03.jpg')}});">
                <div class="image-inner py-5">
                  <div class="card-body">
                    <img class="inner-img d-block mx-auto mb-4" src="assets/img/construction/icons/ic-pantone.svg" width="52" alt="Interior Design">
                    <h5 class="inner-text mb-0 text-center">Interior Design</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
              <a class="image-fade h-100 card card-hover shadow py-3" href="services-single-v2.html" style="background-image: url({{asset('frontPage/assets/img/construction/home/services/04.jpg')}});">
                <div class="image-inner py-5">
                  <div class="card-body">
                    <img class="inner-img d-block mx-auto mb-4" src="assets/img/construction/icons/ic-repair.svg" width="52" alt="Repairs"> 
                    <h5 class="inner-text mb-0 text-center">Repairs</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center text-center">
            Learn more about our services
            <a href="services.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ms-md-5 text-uppercase">View services</a>
          </h4>
        </div>
      </section>


      <!-- Recent projects -->
      <section class="container mt-md-4 py-lg-6 py-5">
        <div class="row align-items-end mb-5 pb-md-3">
          <div class="col-lg-7 col-md-8 col-sm-9">
            <h2 class="h1 mb-0 text-sm-start text-center">Browse our selected projects and learn more about our work</h2>
          </div>
          <div class="col d-sm-block d-none">

            <!-- Carousel custom controls -->
            <div class="tns-custom-controls tns-controls-inverse ms-auto" id="tns-projects-controls" tabindex="0">
              <button type="button" data-controls="prev" tabindex="-1">
                <i class="ci-arrow-left"></i>
              </button>
              <button type="button" data-controls="next" tabindex="-1">
                <i class="ci-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Carousel -->
        <div class="tns-carousel-wrapper tns-nav-inverse">
          <div class="tns-carousel-inner" data-carousel-options='{
            "gutter": 30,
            "controlsContainer": "#tns-projects-controls",
            "responsive": {
              "0": {
                "items": 1,
                "nav": true
              },
              "576": {
                "items": 2,
                "nav": false
              },
              "992": {
                "items": 3
              }
            }
          }'>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
              <a class="portfolio-card-slide" href="project-single-v1.html">
                <div class="portfolio-card-img">
                  <img src="{{asset('frontPage/assets/img/construction/work/projects/07.jpg')}}" alt="Card image">
                </div>
                <div class="portfolio-card-body">
                  <h3 class="portfolio-card-title">Red Finger Building</h3>
                  <div class="fs-sm text-muted">Business Centers</div>
                  <div class="btn btn-outline-primary text-uppercase">View project</div>
                </div>
              </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
              <a class="portfolio-card-slide" href="project-single-v2.html">
                <div class="portfolio-card-img">
                  <img src="{{asset('frontPage/assets/img/construction/work/projects/01.jpg')}}" alt="Card image">
                </div>
                <div class="portfolio-card-body">
                  <h3 class="portfolio-card-title">Cubes Building</h3>
                  <div class="fs-sm text-muted">Business Centers</div>
                  <div class="btn btn-outline-primary text-uppercase">View project</div>
                </div>
              </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
              <a class="portfolio-card-slide" href="project-single-v1.html">
                <div class="portfolio-card-img">
                  <img src="{{asset('frontPage/assets/img/construction/work/projects/06.jpg')}}" alt="Card image">
                </div>
                <div class="portfolio-card-body">
                  <h3 class="portfolio-card-title">The Pencil Building</h3>
                  <div class="fs-sm text-muted">Stores &amp; Malls</div>  
                  <div class="btn btn-outline-primary text-uppercase">View project</div>
                </div>
              </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
              <a class="portfolio-card-slide" href="project-single-v2.html">
                <div class="portfolio-card-img">
                  <img src="{{asset('frontPage/assets/img/construction/work/projects/02.jpg')}}" alt="Card image">
                </div>
                <div class="portfolio-card-body"> 
                  <h3 class="portfolio-card-title">Modern Cottage</h3>
                  <div class="fs-sm text-muted">Private Houses</div>
                  <div class="btn btn-outline-primary text-uppercase">View project</div>
                </div>
              </a>
            </article>
          </div>
        </div>
        <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center pt-sm-0 pt-4 text-center">
          Explore all our works
          <a href="projects.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ms-md-5 text-uppercase">View portfolio</a>
        </h4>
      </section>


      <!-- Shaped bg -->
      <div class="bg-secondary">


        <!-- Brands -->
        <section class="container mt-md-4 pt-lg-6 py-5 px-0">
          <h2 class="h1 mb-5 pb-md-3 text-center">Supported by 12+ partners</h2>

          <!-- Carousel -->
          <div class="tns-carousel-wrapper">
            <div class="tns-carousel-inner" data-carousel-options='{
              "nav": false,
              "controls": false,
              "autoplay": true,
              "autoplayTimeout": 4000,
              "responsive": {
                "0": {
                  "items": 2
                },
                "576": {
                  "items": 3
                },
                "768": {
                  "items": 4
                },
                "992": {
                  "items": 5
                },
                "1200": {
                  "items": 6
                }
              }
            }'>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/skema-floor.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/skema-floor-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/factory-glass.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/factory-glass-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/numark.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/numark-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/edwin.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/edwin-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/eiffage-construction.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/eiffage-construction-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/royal-floor-mats.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/royal-floor-mats-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
              <div class="px-3 text-center">  
                <a href="#" class="swap-image">
                  <img src="{{asset('frontPage/assets/img/construction/logo/lotte.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                  <img src="{{asset('frontPage/assets/img/construction/logo/lotte-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
                </a>
              </div>
            </div>
          </div>
        </section>


        <!-- Testimonials -->
        <section class="container mt-md-4 pt-lg-6 pt-5">
          <div class="row pt-3 pt-lg-0">
            <div class="col-md-6 pb-md-4 pb-5">
              <h2 class="h1 mb-5 pb-md-3 text-md-start text-center">What our clients are saying</h2>

              <!-- Carousel custom controls -->
              <div class="tns-custom-controls tns-controls-inverse d-md-flex d-none mb-n5 mx-0" id="tns-custom-controls" tabindex="0">
                <button class="mb-n2" type="button" data-controls="prev" tabindex="-1">
                  <i class="ci-arrow-left"></i>
                </button>
                <button class="mb-n2" type="button" data-controls="next" tabindex="-1">
                  <i class="ci-arrow-right"></i>
                </button>
              </div>

              <!-- Carousel -->
              <div class="tns-carousel-wrapper tns-nav-outside">
                <div class="tns-carousel-inner" data-carousel-options='{
                  "controlsContainer": "#tns-custom-controls",
                  "autoHeight": true,
                  "responsive": {
                    "0": {
                      "nav": true,
                      "gutter": 0
                    },
                    "768": {
                      "nav": false,
                      "gutter": 15
                    }
                  }
                }'>

                  <!-- Carousel testimonial item -->
                  <blockquote class="px-1 text-md-start text-center">
                    <img class="mb-4 rounded-circle" src="{{asset('frontPage/assets/img/construction/testimonials/01.jpg')}}" width="72" alt="Author">
                    <p>Ipsum aute sunt aliquip aute et occaecat. Anim minim do cillum eiusmod enim. Consectetur magna cillum consequat minim  laboris cillum laboris voluptate minim proident exercitation ullamco. </p>
                    <footer>
                      <h3 class="h6 mb-0">Courtney Alexander</h3>
                      <span class="fs-sm text-muted">Position, Company name</span>
                    </footer>
                  </blockquote>

                  <!-- Carousel testimonial item -->
                  <blockquote class="px-1 text-md-start text-center">
                    <img class="mb-4 rounded-circle" src="{{asset('frontPage/assets/img/construction/testimonials/02.jpg"')}} width="72" alt="Author">
                    <p>Eveniet molestias. Expedita porro doloremque sit at fugiat in animi obcaecati repellendus, quaerat quo soluta quisquam adipisci odit error repudiandae dolorum accusamus vel?</p>
                    <footer>
                      <h3 class="h6 mb-0">Shawn Edwards</h3>
                      <span class="fs-sm text-muted">Position, Company name</span>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 d-md-block d-none mb-md-n5 ms-lg-auto" data-jarallax-element="15" data-disable-parallax-down="lg">
              <img class="rounded" src="{{asset('frontPage/assets/img/construction/testimonials/03.jpg')}}" alt="Testimonials">
            </div>
          </div>
        </section>


      </div> <!-- / Shaped bg -->


      <!-- Shaped bg -->
      <div class="pt-md-5 bg-repeat-0" style="background-image: url({{asset('frontPage/assets/img/construction/shapes/01.png')}});">


        <!-- Progress + Carousel --> 
        <section class="container mt-md-4 pt-lg-6 pt-5 pb-4">
          <h2 class="h1 mb-5 pb-md-3 text-center">Some facts and figures</h2>
          <div class="row pt-md-4">
            <div class="col-sm-8 mx-auto">
              <div class="tns-carousel-wrapper">
                <div class="tns-carousel-inner" data-carousel-options='{
                  "gutter": 48,
                  "nav": false,
                  "controls": false,
                  "autoplay": true,
                  "autoplayTimeout": 4000,
                  "responsive": {
                    "0": {
                      "items": 1
                    },
                    "576": {
                      "items": 2
                    },
                    "768": {
                      "items": 3
                    },
                    "992": {
                      "items": 4
                    }
                  }
                }'>
                  <div>
                    <div class="progress-radial mx-auto" style="max-width: 150px;" data-progress-radial='{
                      "text": {"value": "98%"},
                      "color": "#f89828",
                      "trailColor": "rgba(248,152,40, .3)",
                      "strokeWidth": 4,
                      "trailWidth": 4,
                      "progress": 0.98
                    }'></div>
                    <span class="d-block mt-3 pt-1 text-center fs-sm">Totally satisfied clients</span>
                  </div>
                  <div>
                    <div class="progress-radial mx-auto" style="max-width: 150px;" data-progress-radial='{
                      "text": {"value": "20"},
                      "color": "#f52f6e",
                      "trailColor": "rgba(245,47,110, .3)",
                      "strokeWidth": 4,
                      "trailWidth": 4,
                      "progress": 0.75
                    }'></div>
                    <span class="d-block mt-3 pt-1 text-center fs-sm">Years of experience</span>
                  </div>
                  <div>
                    <div class="progress-radial mx-auto" style="max-width: 150px;" data-progress-radial='{
                      "text": {"value": "9452"},
                      "color": "#5a87fc",
                      "trailColor": "rgba(90,135,252, .3)",
                      "strokeWidth": 4,
                      "trailWidth": 4,
                      "progress": 0.8
                    }'></div>
                    <span class="d-block mt-3 pt-1 text-center fs-sm">Working hours spent</span>
                  </div>
                  <div>
                    <div class="progress-radial mx-auto" style="max-width: 150px;" data-progress-radial='{
                      "text": {"value": "100%"},
                      "color": "#03cea4",
                      "trailColor": "rgba(3,206,164, .3)",
                      "strokeWidth": 4,
                      "trailWidth": 4,
                      "progress": 1
                    }'></div>
                    <span class="d-block mt-3 pt-1 text-center fs-sm">Succeeded projects</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Recent news -->
        <section class="container mt-md-4 py-lg-6 py-5">
          <h2 class="h1 mb-5 pb-md-3 text-center">Recent news</h2>
          <div class="row">
            <div class="col-lg-7 col-md-6 mb-md-0 mb-grid-gutter">
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/01.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body">
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">How to Build Climate Change-Resilient Infrastructure</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Industry News
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        June 24, 2020
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        4 comments
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Ipsum aliquet nisi, hendrerit rhoncus quam tortor, maecenas faucibus. Tincidunt aliquet sit vel, venenatis nulla. Integer bibendum turpis convallis...</p>
                </div>
              </article>
            </div>
            <div class="col-lg-5 col-md-6 d-flex flex-column mb-md-0 mb-grid-gutter">
              <article class="image-scale h-100 mb-grid-gutter card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/recent/01.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body py-3">
                  <h3 class="h5 mb-2">
                    <a class="nav-link" href="news-single.html">How Construction Can Help Itself</a>
                  </h3>
                  <ul class="nav nav-muted">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Innovation
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        June 12, 2020
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/recent/02.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body py-3">
                  <h3 class="h5 mb-2">
                    <a class="nav-link" href="news-single.html">Types of Flooring Materials</a>
                  </h3>
                  <ul class="nav nav-muted">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Company News
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        June 2, 2020
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
          <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center mt-md-4 pt-md-5 pt-3 text-center">
            Explore all our news posts
            <a href="news.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ms-md-5 text-uppercase">View all news</a>
          </h4>
        </section>


      </div> <!-- / Shaped bg -->


      <!-- Details -->
      <section class="py-5 jarallax" data-jarallax data-speed="0.8">

        <!-- Parallax bg -->
        <div class="jarallax-img" style="background-image: url({{asset('frontPage/assets/img/construction/detail-form-bg.jpg')}});"></div>

        <!-- Content -->
        <div class="container py-4">
          <div class="ms-md-auto me-md-0 mx-auto" style="max-width: 495px;">

            <!-- Details form -->
            <form class="py-5 px-sm-5 px-4 bg-light rounded shadow-lg" method="POST" action="{{ route('paak.employee.store') }}">
            @csrf
              <h2 class="h3 text-center">A quick way to discuss details</h2>
              <div class="mb-4">
                <label for="detail-name" class="form-label">Name*</label>
                <input id="detail-name" name="names" class="form-control" type="text" placeholder="Your name" required>
              </div>
              <div class="mb-4">
                <label for="detail-tel" class="form-label">Phone*</label>
                <input id="detail-tel" name="phone" class="form-control" type="tel" placeholder="Your phone number" required>
              </div>
              <div class="mb-4">
                <label for="detail-email" class="form-label">Email</label>
                <input id="detail-email" name="email" class="form-control" type="email" placeholder="Your working email">
              </div>
              <div class="mb-4">
                <label for="detail-message" class="form-label">Message*</label>
                <textarea id="detail-message" name="message" class="form-control" rows="2" placeholder="Your message" required></textarea>
              </div>
              <div class="mb-4 form-check">
                <input id="detail-subscribe" class="form-check-input" type="checkbox" checked>
                <label for="detail-subscribe" class="form-check-label fs-sm">I agree to receive communications from Createx Construction Bureau.</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary text-uppercase">Send request</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer pt-3 bg-dark">
      <div class="container mt-lg-3 py-md-5 py-4">
        <div class="row mb-5">
          <div class="col-lg-5 col-md-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <a class="d-inline-block" href="index.html">
                <img src="{{asset('frontPage/assets/img/construction/logo-light.svg')}}" width="130" alt="Createx logo">
              </a>
              <div class="mt-sm-1 mt-4 pe-sm-4"> 
                <a href="#" class="btn-social">
                  <i class="ci-whatsapp"></i>
                </a>
                <a href="#" class="btn-social">
                  <i class="ci-messenger"></i>
                </a>
                <a href="#" class="btn-social">
                  <i class="ci-facebook"></i>
                </a>
                <a href="#" class="btn-social">
                  <i class="ci-twitter"></i>
                </a>
                <a href="#" class="btn-social">
                  <i class="ci-youtube"></i>
                </a>
              </div>
            </div>
            <p class="mb-md-0 mb-4 fs-sm text-light opacity-60">Createx Construction Bureau has been successfully operating in the USA construction market since 2000. We are proud to offer you quality construction and exemplary service. Our mission is to set the highest standards for construction sphere.</p>
          </div>
          <div class="col-lg-5 offset-lg-2 col-md-6">
            <h4 class="text-light">Let’s stay in touch</h4>
            <form class="input-group">
              <input class="form-control input-light" type="email" placeholder="Your email address" required>
              <button class="btn btn-primary text-uppercase" type="submit">Subscribe</button>
            </form>
            <p class="mb-0 pt-3 fs-xs text-light opacity-60">*Subscribe to our newsletter to receive communications and early updates from Createx Construction Bureau.</p>
          </div>
        </div>
        <div class="row mb-sm-5 mb-4">
          <div class="col-md-4 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Head office</h6>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <span class="me-1 text-light">Address:</span>
                <a href="#" class="nav-link d-inline-block p-0 fw-normal">8502 Preston Rd. Inglewood, New York</a>
              </li>
              <li class="nav-item mb-2">
                <span class="me-1 text-light">Call:</span>
                <a href="tel:(405)555-0128" class="nav-link d-inline-block p-0 fw-normal">(405) 555-0128</a>
              </li>
              <li class="nav-item mb-2">
                <span class="me-1 text-light">Email:</span>
                <a href="mailto:hello@example.com" class="nav-link d-inline-block p-0 fw-normal">hello@example.com</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Who we are</h6>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <a href="about.html" class="nav-link p-0 fw-normal">About Us</a>
              </li>
              <li class="nav-item mb-2">
                <a href="careers.html" class="nav-link p-0 fw-normal">Available Positions</a>
              </li>
              <li class="nav-item mb-2">
                <a href="contacts.html" class="nav-link p-0 fw-normal">Contacts</a>
              </li>
            </ul>
          </div>
          <div class="col-md-5 col-sm-6 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Our experience</h6>
            <ul class="nav nav-light flex-column">
              <li class="nav-item mb-2">
                <a href="services.html" class="nav-link p-0 fw-normal">Services</a>
              </li>
              <li class="nav-item mb-2">
                <a href="projects.html" class="nav-link p-0 fw-normal">Work</a>
              </li>
              <li class="nav-item mb-2">
                <a href="news.html" class="nav-link p-0 fw-normal">News</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="d-flex align-items-sm-center justify-content-between py-1">
          <div class="fs-xs text-light">
            <span class="d-sm-inline d-block mb-1">
              <span class="fs-sm">&copy; </span>
              All rights reserved.
            </span>
            Made with
            <i class="ci-heart mt-n1 mx-1 fs-base text-primary align-middle"></i>
            <a href="https://createx.studio/" class="text-light" target="_blank" rel="noopener noreferrer">by Createx Studio</a>
          </div>
          <div class="d-flex align-items-sm-center">
            <span class="d-sm-inline-block d-none text-light fs-sm me-3 mb-1 align-vertical text-uppercase">Go to top</span>
            <a class="btn-scroll-top position-static rounded" href="#top" data-scroll>
              <i class="btn-scroll-top-icon ci-angle-up"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>


    <!-- Vendor scripts: js libraries and plugins-->
    <script src="{{asset('frontPage/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/lightgallery.js/dist/js/lightgallery.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/lg-video.js/dist/lg-video.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/jarallax/dist/jarallax-element.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/progressbar.js/dist/progressbar.min.js')}}"></script>
    
    <!-- Main theme script-->
    <script src="{{asset('frontPage/assets/js/theme.min.js')}}"></script>
  </body>

<!-- Mirrored from createx.createx.studio/construction/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:25:58 GMT -->
</html>