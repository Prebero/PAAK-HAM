<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from createx.createx.studio/construction/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:27:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Createx | Construction Bureau - News</title>    

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
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="about.html">About</a></li>
                  <li><a class="dropdown-item" href="careers.html">Careers</a></li>
                  <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">News</a>
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
      <section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-repeat-0 bg-size-cover" style="background-image: url({{asset('frontPage/assets/img/construction/news/page-title-bg.jpg')}});">
        <div class="container pt-lg-5 pb-lg-2">   
          <div class="row">
            <div class="col-lg-6 col-md-8">

              <!-- Breadcrumbs -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                    <a href="index.html">Homepage</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
              </nav>

              <!-- Title -->
              <h1 class="display-1 text-uppercase">News</h1>
              <p class="mb-0 lead text-muted">Stay tuned with our news, expert tips and articles.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Page content-->
      <!-- News grid -->
      <section class="container mb-md-5 pt-lg-6 pt-5 pb-4">

        <h2 class="h1 mb-5 text-center">Categories</h2>

        <!-- Filterable grid container. IMPORTANT: it should wrap filters/sorters and target grid of items in order for plugin to work! -->
        <div data-filter-grid>

          <!-- Filter navs -->
          <nav class="mb-lg-5 mb-4 pb-3" data-simplebar data-simplebar-auto-hide="false">
            <ul class="nav nav-tabs nav-fill flex-nowrap mb-0 text-nowrap">
              <li class="nav-item mb-0">
                <span class="nav-link active" data-filter="all">
                  All News
                </span>
              </li>
              <li class="nav-item mb-0">
                <span class="nav-link" data-filter=".company-news">
                  Company News
                </span>
              </li>
              <li class="nav-item mb-0">
                <span class="nav-link" data-filter=".innovation">
                  Innovation
                </span>
              </li>
              <li class="nav-item mb-0">
                <span class="nav-link" data-filter=".industry-news">
                  Industry News
                </span>
              </li>
              <li class="nav-item mb-0">
                <span class="nav-link" data-filter=".expert-tips">
                  Expert Tips
                </span>
              </li>
              <li class="nav-item mb-0">
                <span class="nav-link" data-filter=".marketing">
                  Marketing
                </span>
              </li>
            </ul>
          </nav>

          <!-- Filterable grid of items -->
          <div class="row pt-3">
            <div class="grid-item industry-news col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
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
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
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
            <div class="grid-item innovation col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/02.jpg')}}" alt="Blog card image">
                </a>   
                <div class="card-body">
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">How Construction Can Help Itself</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
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
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Porta habitant vitae quam interdum. Leo viverra non volutpat rhoncus placerat vitae scelerisque. Rhoncus augue faucibus maecenas lacus...</p>
                </div>
              </article>
            </div>
            <div class="grid-item expert-tips col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/03.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body">  
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">The Difference Between a Digger and an Excavator</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Expert Tips
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        May 16, 2020
                      </a>
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Cras est nisi purus velit facilisi vitae, dolor. Lorem scelerisque integer duis et nulla lobortis cursus. Viverra erat sollicitudin praesent viverra...</p>
                </div>
              </article>
            </div>
            <div class="grid-item expert-tips col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/04.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body">   
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">Building Construction Hand Tools</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Expert Tips
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        February 25, 2020
                      </a>
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        1 comment
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Tellus quis aliquet volutpat nunc pulvinar donec sed sapien. Vitae elit id dolor, tristique massa. Fames lobortis orci rutrum bibendum integer...</p>
                </div>
              </article>
            </div>
            <div class="grid-item industry-news col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/05.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body">   
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">Top 10 Construction Trends</a>
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
                        January 14, 2020
                      </a>
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Dignissim sed enim, eleifend morbi condimentum. Congue id quis vulputate dignissim eget. Ac ullamcorper nunc habitasse enim interdum platea...</p>
                </div>
              </article>
            </div>
            <div class="grid-item company-news col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">

              <!-- Post preview: card alt -->
              <article class="image-scale h-100 card shadow card-hover border-0">
                <a class="image-inner card-img-top" href="news-single.html">
                  <img src="{{asset('frontPage/assets/img/construction/news/06.jpg')}}" alt="Blog card image">
                </a>
                <div class="card-body">  
                  <h3 class="h5 mb-2 pb-1">
                    <a class="nav-link" href="news-single.html">Types of Flooring Materials</a>
                  </h3>
                  <ul class="nav nav-muted mb-2 pb-1">
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        Company News
                      </a>
                      <span class="text-border px-1">|</span>
                    </li>
                    <li class="nav-item me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        December 1, 2019
                      </a>
                      <span class="text-border d-sm-inline-block d-none px-1">|</span>
                    </li>
                    <li class="nav-item d-sm-block d-none me-2">
                      <a class="nav-link d-inline-block me-2 p-0 fs-sm fw-normal" href="#">
                        <i class="ci-chat mt-n1 me-2 fs-base align-middle"></i>
                        No comments
                      </a>
                    </li>
                  </ul>
                  <p class="card-text">Maecenas donec lacinia nunc, quam sit magnis mauris. Neque bibendum et mauris, aenean. Vel arcu amet in sem parturient  integer duis et nulla...</p>
                </div>
              </article>
            </div>
          </div>

          <!-- Pagination -->
          <nav aria-label="News navigation">
            <ul class="pagination justify-content-center mb-lg-5 mb-4 pt-3">
              <li class="page-item d-sm-none">
                <span class="page-link page-link-static">1 / 4</span>
              </li>
              <li class="page-item active d-none d-sm-block" aria-current="page">
                <span class="page-link">1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item d-none d-sm-block">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item d-none d-sm-block">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item d-none d-sm-block">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="ci-arrow-right"></i>
                </a>
              </li>
            </ul>
          </nav>
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
            <form class="py-5 px-sm-5 px-4 bg-light rounded shadow-lg"method="POST" action="{{ route('paak.employee.store') }}">
              @csrf
              <h2 class="h3 text-center">A quick way to discuss details</h2>
              <div class="mb-4">
                <label for="detail-name" class="form-label">Name*</label>
                <input id="detail-name" class="form-control"name ="names" type="text" placeholder="Your name" required>
              </div>
              <div class="mb-4">
                <label for="detail-tel" class="form-label">Phone*</label>
                <input id="detail-tel" class="form-control" name ="phone" type="tel" placeholder="Your phone number" required>
              </div>
              <div class="mb-4">
                <label for="detail-email" class="form-label">Email</label>
                <input id="detail-email" class="form-control"  name ="email"type="email" placeholder="Your working email">
              </div>
              <div class="mb-4">
                <label for="detail-message" class="form-label">Message*</label>
                <textarea id="detail-message"  name ="message" class="form-control" rows="2" placeholder="Your message" required></textarea>
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
    <script src="{{asset('frontPage/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('frontPage/assets/vendor/mixitup/dist/mixitup.min.js')}}"></script>

    <!-- Main theme script-->
    <script src="{{asset('frontPage/assets/js/theme.min.js')}}"></script>      
  </body>

<!-- Mirrored from createx.createx.studio/construction/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:27:29 GMT -->
</html>