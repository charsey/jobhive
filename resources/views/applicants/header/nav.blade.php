@php
$user = Auth::user();
@endphp
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from finder.createx.studio/job-board-home-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 20:23:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Finder | Job Board | Home - Job Seekers</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="assets/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
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
        color: #666276;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #bbb7c5;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
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
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/nouislider/dist/nouislider.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Demo switcher (offcanvas)-->

    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
    
      <!-- Sign Up Modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 734px;">
          <div class="modal-content">
            <div class="modal-body p-sm-5">
              <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <ul class="nav nav-pills flex-column flex-sm-row border-bottom pb-4 mt-sm-n2 my-4" role="tablist">
                <li class="nav-item me-sm-3 mb-sm-0"><a class="nav-link active" href="assets/#job-seeker" data-bs-toggle="tab" role="tab" aria-controls="job-seeker" aria-selected="true"><i class="fi-user me-2"></i>I am job seeker</a></li>
                <li class="nav-item mb-sm-0"><a class="nav-link" href="assets/#employer" data-bs-toggle="tab" role="tab" aria-controls="employer" aria-selected="false"><i class="fi-briefcase me-2"></i>I am employer</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="job-seeker" role="tabpanel">
                  <h3>Register to add a resume</h3>
                  <p class="pb-3">Get access to all the functions of the site that will help you find a great job.</p>
                  <div class="row gx-2 gx-md-4">
                    <div class="col-sm-6 mb-3"><a class="btn btn-outline-info w-100 rounded-pill" href="assets/#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a></div>
                    <div class="col-sm-6 mb-3"><a class="btn btn-outline-info w-100 rounded-pill" href="assets/#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a></div>
                  </div>
                  <div class="d-flex align-items-center py-2 mb-2">
                    <hr class="w-100">
                    <div class="px-3">Or</div>
                    <hr class="w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="row gx-2 gx-md-4">
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="js-fn">Full name</label>
                        <input class="form-control" type="text" id="js-fn" placeholder="Enter your full name" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="js-email">Emaill address</label>
                        <input class="form-control" type="email" id="js-email" placeholder="Enter your email" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="js-password">Password <span class='text-muted'>(min. 8 char)</span></label>
                        <div class="password-toggle">
                          <input class="form-control" type="password" id="js-password" minlength="8" required>
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="js-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                          <input class="form-control" type="password" id="js-password-confirm" minlength="8" required>
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms">By joining, I agree to the <a href='#'>Terms of use</a> and <a href='#'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100 rounded-pill" type="submit">Sign up</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="employer" role="tabpanel">
                  <h3>Register to post a vacancy</h3>
                  <p class="pb-3">Get access to all special services for employers on Finder.</p>
                  <form class="needs-validation" novalidate>
                    <div class="row gx-2 gx-md-4">
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-fn">Full name</label>
                        <input class="form-control" type="text" id="em-fn" placeholder="Enter your full name" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-email">Emaill <span class='text-muted'>(better corporate)</span></label>
                        <input class="form-control" type="email" id="em-email" placeholder="Enter email" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-company">Company name</label>
                        <input class="form-control" type="text" id="em-company" placeholder="Enter company name" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-location">Main office location</label>
                        <input class="form-control" type="text" id="em-location" placeholder="Country, City, Address" required>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-password">Password <span class='text-muted'>(min. 8 char)</span></label>
                        <div class="password-toggle">
                          <input class="form-control" type="password" id="em-password" minlength="8" required>
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="em-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                          <input class="form-control" type="password" id="em-password-confirm" minlength="8" required>
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms2" required>
                      <label class="form-check-label" for="agree-to-terms2">By joining, I agree to the <a href='#'>Terms of use</a> and <a href='#'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100 rounded-pill" type="submit">Sign up</button>
                  </form>
                </div>
              </div>
              <div class="pt-4 pb-3 pb-sm-0 mt-2">Already have an account? <a href="assets/#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar-->
      <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-scroll-header>
        <div class="container"><a class="navbar-brand me-0 me-xl-4" href="assets/job-board-home-v1.html"><img class="d-block" src="assets/img/logo/logo-light.svg" width="116" alt="Finder"></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><a class="btn btn-link btn-light btn-sm d-none d-lg-block order-lg-3" href="profile-settings">
        
        
          @if (Auth::check()) 
           {{auth()->user()->name}}
     
  </a>
 @else
 
 <a class="btn btn-link btn-light btn-sm d-none d-lg-block order-lg-3" style="max-height: 354rem;" href="login">
<br>
 <p>  <i class="fi-user me-2"></i>Login</p>


 </a>

 <a class="btn btn-primary btn-sm rounded-pill ms-2 order-lg-3" href="register"><i class="fi-lock me-2"></i>SignUp</a></a>
@endif

      
        @if (Auth::check()) 
        <a class="btn btn-primary btn-sm rounded-pill ms-2 order-lg-3" href="upload-resume"><i class="fi-plus me-2"></i>Upload resume</a></a>
        @endif
          <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
              <!-- Demos switcher-->
              <li class="nav-item dropdown me-lg-2"><a class="nav-link dropdown-toggle align-items-center pe-lg-4" href="assets/#" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="fi-layers me-2"></i>Demos<span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span></a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="assets/real-estate-home-v1.html"><i class="fi-building fs-base me-2"></i>Real Estate Demo</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="assets/car-finder-home.html"><i class="fi-car fs-base me-2"></i>Car Finder Demo</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="assets/job-board-home-v1.html"><i class="fi-briefcase fs-base me-2"></i>Job Board Demo</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="assets/city-guide-home-v1.html"><i class="fi-map-pin fs-base me-2"></i>City Guide Demo</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="assets/index.html"><i class="fi-home fs-base me-2"></i>Main Page</a></li>
                  <li><a class="dropdown-item" href="assets/components/typography.html"><i class="fi-list fs-base me-2"></i>Components</a></li>
                  <li><a class="dropdown-item" href="assets/docs/dev-setup.html"><i class="fi-file fs-base me-2"></i>Documentation</a></li>
                </ul>
              </li>
              <!-- Menu items-->
              <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="assets/job-board-home-v1.html">For Job Seekers</a></li>
                  <li><a class="dropdown-item" href="assets/job-board-home-v2.html">For Employers</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="assets/job-board-catalog.html">List of Jobs</a></li>
                  <li><a class="dropdown-item" href="assets/job-board-single.html">Single Job Page</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="assets/#">Account Pages</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="assets/job-board-account-profile.html">Profile Settings</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-account-my-resumes.html">My Resumes</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-account-saved-jobs.html">Saved Jobs</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-account-notifications.html">Notifications</a></li>
                      <li><a class="dropdown-item" href="assets/signin-light.html">Sign In</a></li>
                      <li><a class="dropdown-item" href="assets/signup-light.html">Sign Up</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="assets/#">Post Resume</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="assets/job-board-post-resume-1.html">Step 1: Basic Info</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-post-resume-2.html">Step 2: Education</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-post-resume-3.html">Step 3: Work Experience</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-post-resume-4.html">Step 4: Skills</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-post-resume-5.html">Step 5: Review</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="assets/job-board-promotion.html">Ad Promotion Page</a></li>
                  <li><a class="dropdown-item" href="assets/job-board-employer-single.html">Employer / Company Page</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="assets/job-board-about.html">About</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="assets/job-board-blog.html">Blog Grid</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-blog-single.html">Single Post</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="assets/job-board-contacts.html">Contacts</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="assets/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help Center</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="assets/job-board-help-center.html">Help Topics</a></li>
                      <li><a class="dropdown-item" href="assets/job-board-help-center-single-topic.html">Single Topic</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="assets/job-board-404.html">404 Not Found</a></li>
                </ul>
              </li>
              <li class="nav-item d-lg-none"><a href="profile-settings" ><i class="fi-user me-2"></i>
              @if (Auth::check()) 
      {{auth()->user()->name}}
     
 
 @else
 <p>Login</p>
@endif
</a></li>
            </ul>
          </div>
        </div>
      </header>
      <!-- Page content-->