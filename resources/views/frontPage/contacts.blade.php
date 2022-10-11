<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from createx.createx.studio/construction/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:27:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Createx | Construction Bureau - Contacts</title>

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
      <section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-repeat-0 bg-position-center-x bg-size-cover" style="background-image: url({{asset('frontPage/assets/img/construction/contacts/page-title-bg.jpg')}});">
        <div class="container pt-lg-5 pb-lg-2">
          <div class="row">
            <div class="col-lg-6 col-md-8">

              <!-- Breadcrumbs -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                    <a href="index.html">Homepage</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="about.html">About Us</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                </ol>
              </nav>

              <!-- Title -->
              <h1 class="display-1 text-uppercase">Contacts</h1>
              <p class="mb-0 lead text-muted">Contact us for all your construction needs. We always welcome any questions and comments.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Page content-->
      <!-- Contact form -->   
      <section class="container py-lg-6 py-5">
        <h2 class="h1 text-center">Contact us</h2>
        <p class="mb-5 pb-md-3 text-center text-muted">Please complete the form. Detailed information will help us to make a tuned offer.</p>
        <div class="row">
          <div class="col-md-5 col-sm-9 mx-auto mb-md-0 mb-5">
            <img src="{{asset('frontPage/assets/img/construction/contacts/contact.jpg')}}" alt="Contact Us" class="rounded">
          </div>
          <div class="col-lg-6 offset-lg-1 col-md-7">

            <!-- Form -->
            <form class="row needs-validation" novalidate>
              <div class="col-sm-6">
                <div class="mb-4">
                  <label for="contact-name" class="form-label-lg">Name*</label>
                  <input id="contact-name" class="form-control form-control-lg" type="text" placeholder="Your name" required>
                  <div class="invalid-tooltip">Please enter your name.</div>
                </div>
                <div class="mb-4">
                  <label for="contact-tel" class="form-label-lg">Phone*</label>
                  <input id="contact-tel" class="form-control form-control-lg" type="tel" placeholder="Your phone number" required>
                  <div class="invalid-tooltip">Please enter your email.</div>
                </div>
                <div class="mb-4">
                  <label for="contact-email" class="form-label-lg">Email</label>
                  <input id="contact-email" class="form-control form-control-lg bg-image-0" type="email" placeholder="Your working email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-4">
                  <label for="contact-service" class="form-label-lg">I am interested in</label>
                  <select id="contact-service" class="form-select form-select-lg">
                    <option>Interior Design</option>
                    <option>Repairs</option>
                    <option>Project Development</option>
                    <option>Construction</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="contact-location" class="form-label-lg">Location*</label>
                  <select id="contact-location" class="form-select form-select-lg">
                    <option>Choose your location</option>
                    <option>New York</option>
                    <option>New Jersey</option>
                    <option>San Francisco</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="contact-method-phone" class="form-label-lg">Preferred contact method</label>
                  <div class="d-flex flex-wrap mt-2 pt-1">
                    <div class="form-check me-4">
                      <input id="contact-method-phone" name="contact-method" class="form-check-input" type="radio" checked>
                      <label for="contact-method-phone" class="form-check-label fs-base">Phone</label>
                    </div>
                    <div class="form-check me-4">
                      <input id="contact-method-email" name="contact-method" class="form-check-input" type="radio">
                      <label for="contact-method-email" class="form-check-label fs-base">Email</label>
                    </div>
                    <div class="form-check">
                      <input id="contact-method-viber" name="contact-method" class="form-check-input" type="radio">
                      <label for="contact-method-viber" class="form-check-label fs-base">Viber</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-4">
                  <label for="contact-message" class="form-label-lg">Message*</label>
                  <textarea id="contact-message" class="form-control form-control-lg bg-image-0" rows="5" placeholder="Your message" required></textarea>
                  <div class="invalid-tooltip">Please leave us a message.</div>
                </div>
                <div class="d-flex flex-lg-row flex-column align-items-sm-start align-items-stretch justify-content-sm-between pt-md-4 pt-2">
                  <div class="mb-4 form-check">
                    <input id="contact-subscribe" class="form-check-input" type="checkbox" checked>
                    <label for="contact-subscribe" class="form-check-label fs-base">I agree to receive communications from Createx Construction Bureau.</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg ms-lg-5 text-uppercase">Send request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>


      <!-- Shaped bg -->
      <div class="bg-secondary">


        <!-- Contact info -->
        <section class="container pt-lg-6 py-5">
          <h2 class="h1 text-center">Our offices</h2>
          <p class="mb-5 pb-md-3 text-center text-muted">Give us a call, send us a note or visit our office. We can’t wait to hear from you!</p>
          <div class="row g-0">
            <div class="col-md-4">
              <div class="mx-auto mb-md-0 mb-grid-gutter text-md-start text-center" style="max-width: 250px;">
                <h3>New York, USA</h3>
                <span class="d-block mb-1">8502 Preston Rd. Inglewood, New York 98380</span>
                <a href="#">See on the map</a>
                <ul class="nav nav-dark flex-column mt-3 pt-1">
                  <li class="nav-item">
                    <span class="me-1 text-muted">Call:</span>
                    <a href="tel:(405)555-0128" class="nav-link d-inline-block p-0 fw-normal">(405) 555-0128</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Email:</span>
                    <a href="mailto:hello@example.com" class="nav-link d-inline-block p-0 fw-normal">hello@example.com</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Schedule:</span>
                    <a href="#" class="nav-link d-inline-block p-0 fw-normal">Mon - Fri 9:00 - 18:00</a>
                  </li>
                </ul>
              </div>
            </div>
            <span class="divider-vertical d-md-block d-none"></span>
            <div class="col-md-4">
              <div class="mx-auto mb-md-0 mb-grid-gutter text-md-start text-center" style="max-width: 250px;">
                <h3>New Jersey, USA</h3>
                <span class="d-block mb-1">2464 Royal Ln. Mesa, New Jersey 45463</span>
                <a href="#">See on the map</a>
                <ul class="nav nav-dark flex-column mt-3 pt-1">
                  <li class="nav-item">
                    <span class="me-1 text-muted">Call:</span>
                    <a href="tel:(808)555-0111" class="nav-link d-inline-block p-0 fw-normal">(808) 555-0111</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Email:</span>
                    <a href="mailto:hello@example.com" class="nav-link d-inline-block p-0 fw-normal">hello@example.com</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Schedule:</span>
                    <a href="#" class="nav-link d-inline-block p-0 fw-normal">Mon - Fri 9:00 - 18:00</a>
                  </li>
                </ul>
              </div>
            </div>
            <span class="divider-vertical d-md-block d-none"></span>
            <div class="col-md-4">
              <div class="mx-auto text-md-start text-center" style="max-width: 250px;">
                <h3>San Francisco, USA</h3>
                <span class="d-block mb-1">8502 Preston Rd. Inglewood, San Francisco 98380</span>
                <a href="#">See on the map</a>
                <ul class="nav nav-dark flex-column mt-3 pt-1">
                  <li class="nav-item">
                    <span class="me-1 text-muted">Call:</span>
                    <a href="tel:(505)555-0125" class="nav-link d-inline-block p-0 fw-normal">(505) 555-0125</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Email:</span>
                    <a href="mailto:hello@example.com" class="nav-link d-inline-block p-0 fw-normal">hello@example.com</a>
                  </li>
                  <li class="nav-item">
                    <span class="me-1 text-muted">Schedule:</span>
                    <a href="#" class="nav-link d-inline-block p-0 fw-normal">Mon - Fri 9:00 - 18:00</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>


        <!-- Contact socials -->
        <section class="container pt-lg-6 py-5">
          <h2 class="h1 pb-3 text-center">Find us at</h2>
          <div class="mb-5 text-center">
            <a href="#" class="btn-social mx-2" style="font-size: 32px;">
              <i class="ci-whatsapp"></i>
            </a>
            <a href="#" class="btn-social mx-2" style="font-size: 32px;">
              <i class="ci-messenger"></i>
            </a>
            <a href="#" class="btn-social mx-2" style="font-size: 32px;">
              <i class="ci-facebook"></i>
            </a>
            <a href="#" class="btn-social mx-2" style="font-size: 32px;">
              <i class="ci-twitter"></i>
            </a>
            <a href="#" class="btn-social mx-2" style="font-size: 32px;">
              <i class="ci-youtube"></i>
            </a>
          </div>
        </section>
      </div>
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

<!-- Mirrored from createx.createx.studio/construction/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 09:27:23 GMT -->
</html>