<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from createx.createx.studio/construction/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:26:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Createx | Construction Bureau - About Us</title> 

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
      <header class="header navbar navbar-expand-lg navbar-light navbar-sticky navbar-floating">
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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.html">Homepage v.1</a></li>
                  <li><a class="dropdown-item" href="index-v2.html">Homepage v.2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="services.html">Services List</a></li>
                  <li><a class="dropdown-item" href="services-single-v1.html">Single Service v.1</a></li>
                  <li><a class="dropdown-item" href="services-single-v2.html">Single Service v.2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Works</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="projects.html">Projects Grid</a></li>
                  <li><a class="dropdown-item" href="project-single-v1.html">Single Project v.1</a></li>
                  <li><a class="dropdown-item" href="project-single-v2.html">Single Project v.2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">About</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="about.html">About</a></li>
                  <li><a class="dropdown-item" href="careers.html">Careers</a></li>
                  <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">News</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="news.html">News Grid</a></li>
                  <li><a class="dropdown-item" href="news-single.html">Single Post</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </header>


      <!-- Page title-->
      <section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-repeat-0 bg-size-cover" style="background-image: url({{asset('frontPage/assets/img/construction/about/page-title-bg.jpg')}});">
        <div class="container pt-lg-5 pb-lg-2">
          <div class="row">
            <div class="col-lg-6 col-md-8">      

              <!-- Breadcrumbs -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                    <a href="index.html">Homepage</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>

              <!-- Title -->
              <h1 class="display-1 text-uppercase">About Us</h1>
              <p class="mb-0 lead text-muted">Createx Construction Bureau has been successfully operating in the USA construction market since 2000. We are proud to offer you quality construction and exemplary service.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Page content-->
      <!-- Shaped bg -->
      <div class="bg-repeat-0 bg-position-center-bottom" style="background-image: url({{asset('frontPage/assets/img/construction/shapes/03.png')}});">


        <!-- Features -->
        <section class="container mb-md-5 py-lg-6 py-5">        
          <div class="row">
            <div class="col-md-3 col-sm-6 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 260px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/about/features/ic-like.svg')}}" width="48" alt="Icon box image">
                <h3 class="h1 mb-2 text-primary">60%</h3>
                <p class="mb-0 fs-sm text-muted">Clients on the recommendation of friends</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 260px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/about/features/ic-painting.svg')}}" width="48" alt="Icon box image">
                <h3 class="h1 mb-2 text-primary">2400+</h3>
                <p class="mb-0 fs-sm text-muted">Apartments renovated</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 260px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/about/features/ic-helmet.svg')}}" width="48" alt="Icon box image">
                <h3 class="h1 mb-2 text-primary">670</h3>
                <p class="mb-0 fs-sm text-muted">Qualified specialists</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 260px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/about/features/ic-pantone.svg')}}" width="48" alt="Icon box image">
                <h3 class="h1 mb-2 text-primary">150000+ m<sup>2</sup></h3>
                <p class="mb-0 fs-sm text-muted">Finishing work was carried out</p>
              </div>
            </div>
          </div>       
        </section>


        <!-- Guaranty -->
        <section class="container py-lg-6 py-5">
          <div class="row">
            <div class="col-md-5 pe-md-0" data-jarallax-element="-15" data-disable-parallax-down="md">
              <img src="{{asset('frontPage/assets/img/construction/about/director.jpg')}}" alt="Courtney Alexander" class="rounded">
            </div>
            <div class="col-md-7 mt-md-n6 ms-md-n4 ps-md-0" data-jarallax-element="25" data-disable-parallax-down="md">
              <div class="py-5 px-lg-5 px-sm-4 px-3 bg-light rounded shadow-sm">

                <!-- Quote -->
                <blockquote class="blockquote">
                  <p class="pe-sm-4 lead fw-bold">Dapibus nec vitae ante mattis. Aliquam phasellus ac dui augue in. Sed aliquet in egestas hac at proin sed quam. Etiam aliquet sagittis non, massa cum pulvinar. Et in leo, tempus purus vestibulum ut blandit et mi. Odio massa purus vel praesent arcu enim elit felis viverra.</p>
                  <p class="pe-sm-4 lead fw-bold">Magna aliquam interdum mattis ipsum arcu. Elit odio elit viverra quis metus amet eleifend amet. Vet suspendisse faucibus tempor ipsum integer.</p>
                  <footer class="d-sm-flex align-items-start justify-content-between pt-4 pe-4">
                    <div class="me-sm-4 mb-sm-0 mb-5">
                      <h3 class="h6 mb-1">Courtney Alexander</h3>
                      <span class="fs-sm text-muted">CEO - Createx Construction Bureau</span>
                    </div>
                    <img class="d-block ms-sm-0 ms-auto" src="{{asset('frontPage/assets/img/construction/about/signature.png')}}" width="100" alt="Director's signature">
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </section>


      </div> <!-- / Shaped bg -->


      <!-- Shaped bg -->
      <div class="bg-secondary">


        <!-- Core values -->
        <section class="container pt-lg-6 pt-5 pb-5">
          <h2 class="h1 text-center">Our core values</h2>
          <p class="mb-5 pb-md-3 text-muted text-center">Our mission is to set the highest standards for construction sphere.</p>
          <div class="row g-0">
            <div class="col-md-4 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 285px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-like.svg')}}" width="48" alt="Icon box image">
                <h3 class="h5 mb-2">Quality</h3>
                <p class="mb-0 text-muted">Culpa nostrud commodo ea consequat aliquip reprehenderit. Veniam velit nostrud aliquip sunt.</p>
              </div>
            </div>          
            <span class="divider-vertical d-md-block d-none"></span>
            <div class="col-md-4 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 285px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-hand.svg')}}" width="48" alt="Icon box image">
                <h3 class="h5 mb-2">Safety</h3>
                <p class="mb-0 text-muted">Anim reprehenderit sint voluptate exercitation adipisicing laborum adipisicing. Minim empor est ea.</p>
              </div>
            </div>
            <span class="divider-vertical d-md-block d-none"></span>
            <div class="col-md-4 mb-md-0 mb-5">
              <div class="mx-auto text-center" style="max-width: 285px;">
                <img class="mb-4" src="{{asset('frontPage/assets/img/construction/icons/ic-slippers.svg')}}" width="48" alt="Icon box image">
                <h3 class="h5 mb-2">Comfort</h3>
                <p class="mb-0 text-muted">Sit veniam aute dolore adipisicing nulla sit culpa. Minim mollit voluptate ullamco proident ea ad.</p>
              </div>
            </div>
          </div>
        </section>       


        <!-- History -->
        <section class="container pt-lg-6 pt-5 pb-5">
          <div class="row align-items-end mb-5 pb-md-3">
            <div class="col-lg-7 col-md-8 col-sm-9">
              <h2 class="h1 mb-0 text-sm-start text-center">Our history</h2>
            </div>
            <div class="col d-sm-block d-none">

              <!-- Carousel custom controls -->
              <div class="tns-custom-controls tns-controls-inverse ms-auto" id="tns-history-controls" tabindex="0">
                <button type="button" data-controls="prev" tabindex="-1">
                  <i class="ci-arrow-left"></i>
                </button>
                <button type="button" data-controls="next" tabindex="-1">
                  <i class="ci-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 mb-md-0 mb-5">

              <!-- Vertical steps + Carousel custom nav -->
              <div class="pb-3" data-simplebar data-simplebar-auto-hide="false">
                <div class="steps-vertical-start d-md-block d-flex" id="history-nav">

                  <!-- Step 1 -->
                  <div class="step-vertical step-vertical-nav" data-nav="0">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">Present</div>
                    </div>
                  </div>

                  <!-- Step 2 -->
                  <div class="step-vertical step-vertical-nav" data-nav="1">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">March 2019</div>
                    </div>
                  </div>

                  <!-- Step 3 -->
                  <div class="step-vertical step-vertical-nav" data-nav="2">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">November 2018</div>
                    </div>
                  </div>

                  <!-- Step 4 -->
                  <div class="step-vertical step-vertical-nav" data-nav="3">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">July 2015</div>
                    </div>
                  </div>

                  <!-- Step 5 -->
                  <div class="step-vertical step-vertical-nav" data-nav="4">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">August 2010</div>
                    </div>
                  </div>

                  <!-- Step 6 -->
                  <div class="step-vertical step-vertical-nav" data-nav="5">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">February 2007</div>
                    </div>
                  </div>

                  <!-- Step 7 -->
                  <div class="step-vertical step-vertical-nav" data-nav="6">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">May 2004</div>
                    </div>
                  </div>

                  <!-- Step 8 -->
                  <div class="step-vertical step-vertical-nav" data-nav="7">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">October 2001</div>
                    </div>
                  </div>

                  <!-- Step 9 -->
                  <div class="step-vertical step-vertical-nav" data-nav="8">
                    <div class="step-line d-md-block d-none"></div>
                    <div class="step-body px-md-grid-gutter px-4 text-md-start text-center">
                      <div class="step-label h3 mb-0">June 2000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 offset-lg-1">

              <!-- Carousel -->
              <div class="tns-carousel-wrapper">
                <div class="tns-carousel-inner" data-carousel-options='{
                  "gutter": 30,
                  "navContainer": "#history-nav",
                  "controlsContainer": "#tns-history-controls"
                }'>

                  <!-- Slide 1 -->   
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/01.jpg')}}" alt="Present" class="d-block mb-grid-gutter rounded">
                    <p>Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 2 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/02.jpg')}}" alt="March 2019" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 3 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/03.jpg')}}" alt="November 2018" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada. Maecenas sed quis diam posuere vitae egestas integer et morbi malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra. Eu nec vitae nibh semper iaculis duis viverra porttitor in.</p>
                  </div>

                  <!-- Slide 4 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/04.jpg')}}" alt="July 2015" class="d-block mb-grid-gutter rounded">
                    <p>Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 5 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/05.jpg')}}" alt="August 2010" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 6 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/06.jpg')}}" alt="February 2007" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada. Maecenas sed quis diam posuere vitae egestas integer et morbi malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra. Eu nec vitae nibh semper iaculis duis viverra porttitor in.</p>
                  </div>

                  <!-- Slide 7 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/07.jpg')}}" alt="May 2004" class="d-block mb-grid-gutter rounded">
                    <p>Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 8 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/08.jpg')}}" alt="October 2001" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada vitae egestas integer et morbi. Maecenas sed quis diam posuere malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra nibh semper iaculis duis viverra porttitor in. Eu nec vitae.</p>
                  </div>

                  <!-- Slide 9 -->
                  <div>
                    <img src="{{asset('frontPage/assets/img/construction/about/history/09.jpg')}}" alt="June 2000" class="d-block mb-grid-gutter rounded">
                    <p>Eu nec vitae, malesuada. Maecenas sed quis diam posuere vitae egestas integer et morbi malesuada magnis. Bcelerisque dapibus. Bcelerisque dapibus pharetra. Eu nec vitae nibh semper iaculis duis viverra porttitor in.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


      </div> <!-- / Shaped bg -->


      <!-- Brands -->
      <section class="container mb-md-4 pt-lg-6 pt-5 pb-4 px-0">
        <h2 class="h1 text-center">Our partners</h2>
        <p class="mb-5 pb-md-3 text-muted text-center">We are supported by 12+ industry bodies and media partners</p>

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
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/skema-floor.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/skema-floor-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/lovato.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/lovato-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/factory-glass.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/factory-glass-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/bassett-furniture.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/bassett-furniture-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/numark.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/numark-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/x-rite.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/x-rite-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/edwin.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/edwin-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/lotte.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/lotte-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/eiffage-construction.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/eiffage-construction-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/sennheiser.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/sennheiser-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
            <div class="px-3 text-center">
              <a href="#" class="swap-image mb-5">
                <img src="{{asset('frontPage/assets/img/construction/logo/royal-floor-mats.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/royal-floor-mats-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
              <a href="#" class="swap-image">
                <img src="{{asset('frontPage/assets/img/construction/logo/exxon.svg')}}" class="swap-to" width="120" alt="Brand logo hover">
                <img src="{{asset('frontPage/assets/img/construction/logo/exxon-g.svg')}}" class="swap-from" width="120" alt="Brand logo">
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Team -->
      <section class="pt-lg-6 pt-5 pb-4 bg-repeat-0 bg-position-center-bottom" style="background-image: url({{asset('frontPage/assets/img/construction/shapes/04.png')}});">
        <div class="container">
          <h2 class="h1 text-center">Our team</h2>
          <p class="mb-5 pb-md-3 text-muted text-center">People are at the heart of Createx Construction Bureau  </p>  
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">   
              <div class="card team-alt">
                <div class="card-img">
                  <img src="{{asset('frontPage/assets/img/construction/about/team/01.jpg')}}" alt="Courtney Alexander"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Courtney Alexander</h5>
                  <span class="card-text text-muted">CEO, Co-Founder</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">
                  <img src="{{asset('frontPage/assets/img/construction/about/team/02.jpg')}}" alt="Calvin Fox"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">    
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Calvin Fox</h5>
                  <span class="card-text text-muted">CTO, Co-Founder</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">
                  <img src="{{asset('frontPage/assets/img/construction/about/team/03.jpg')}}" alt="Johnny Lane"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">  
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Johnny Lane</h5>
                  <span class="card-text text-muted">Commercial Manager</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">   
                  <img src="{{asset('frontPage/assets/img/construction/about/team/04.jpg')}}" alt="Diane Mccoy"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Diane Mccoy</h5>
                  <span class="card-text text-muted">Director of Human Resources</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">  
                  <img src="{{asset('frontPage/assets/img/construction/about/team/05.jpg')}}" alt="Judith Warren"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Judith Warren</h5>
                  <span class="card-text text-muted">Lead Accountant</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">   
                  <img src="{{asset('frontPage/assets/img/construction/about/team/06.jpg')}}" alt="Floyd Simmmons"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Floyd Simmmons</h5>
                  <span class="card-text text-muted">Finacial Director</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">   
                  <img src="{{asset('frontPage/assets/img/construction/about/team/07.jpg')}}" alt="Serenity Edwards"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Serenity Edwards</h5>
                  <span class="card-text text-muted">Director of Marketing</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-5 mb-4 pb-lg-3">
              <div class="card team-alt">
                <div class="card-img">   
                  <img src="{{asset('frontPage/assets/img/construction/about/team/08.jpg')}}" alt="Shawn Edwards"/>
                  <div class="card-floating-links text-center">
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-facebook"></i>
                    </a>
                    <a class="btn-social bs-light text-white me-2" href="#">
                      <i class="ci-instagram"></i>
                    </a>
                    <a class="btn-social bs-light text-white" href="#">
                      <i class="ci-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body py-3 text-center">
                  <h5 class="card-title mb-1">Shawn Edwards</h5>
                  <span class="card-text text-muted">Tech Lead</span>
                </div>
              </div>
            </div>
          </div>
          <p class="mb-5 fs-lg text-center">
            Become a part of the best team in the construction market of the USA.
            <a href="careers.html">Available Positions</a>
          </p>
        </div>
      </section>


      <!-- Location -->
      <section class="pt-5 pb-lg-6 py-5 bg-secondary">
        <div class="container pt-4">
          <h2 class="h1 mb-5 pb-md-3 text-center">We work worldwide</h2>
          <img src="{{asset('frontPage/assets/img/construction/about/loocation.png')}}" alt="Our location">
        </div>
      </section>    


      <!-- Details -->
      <section class="py-5 jarallax" data-jarallax data-speed="0.8">

        <!-- Parallax bg -->
        <div class="jarallax-img" style="background-image: url({{asset('frontPage/assets/img/construction/detail-form-bg.jpg')}});"></div>

        <!-- Content -->
        <div class="container py-4">
          <div class="ms-md-auto me-md-0 mx-auto" style="max-width: 495px;">

            <!-- Details form -->
            <form class="py-5 px-sm-5 px-4 bg-light rounded shadow-lg">
              <h2 class="h3 text-center">A quick way to discuss details</h2>
              <div class="mb-4">
                <label for="detail-name" class="form-label">Name*</label>
                <input id="detail-name" class="form-control" type="text" placeholder="Your name" required>
              </div>
              <div class="mb-4">
                <label for="detail-tel" class="form-label">Phone*</label>
                <input id="detail-tel" class="form-control" type="tel" placeholder="Your phone number" required>
              </div>
              <div class="mb-4">
                <label for="detail-email" class="form-label">Email</label>
                <input id="detail-email" class="form-control" type="email" placeholder="Your working email">
              </div>
              <div class="mb-4">
                <label for="detail-message" class="form-label">Message*</label>
                <textarea id="detail-message" class="form-control" rows="2" placeholder="Your message" required></textarea>
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
    <script src="{{asset('frontPage/assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/jarallax/dist/jarallax-element.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>

    <!-- Main theme script-->
    <script src="{{asset('frontPage/assets/js/theme.min.js')}}"></script>
  </body>

<!-- Mirrored from createx.createx.studio/construction/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:27:17 GMT -->
</html>