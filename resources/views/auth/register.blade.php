


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

      <!-- Sign Up Modal-->
      <div style="background-color:#eee;">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 734px;">
          <div class="modal-content">
            <div class="modal-body p-sm-5">
              <ul class="nav nav-pills flex-column flex-sm-row border-bottom pb-4 mt-sm-n2 my-4" role="tablist">
                <li class="nav-item me-sm-3 mb-sm-0"><a class="nav-link active" href="assets/#job-seeker" data-bs-toggle="tab" role="tab" aria-controls="job-seeker" aria-selected="true"><i class="fi-user me-2"></i>I am job seeker</a></li>
                <li class="nav-item mb-sm-0"><a class="nav-link" href="assets/#employer" data-bs-toggle="tab" role="tab" aria-controls="employer" aria-selected="false"><i class="fi-briefcase me-2"></i>I am employer</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="job-seeker" role="tabpanel">
                  <h3>Register to add a resume</h3>
                  <p class="pb-3">Get access to all the functions of the site that will help you find a great job.</p>
                  <div class="row gx-2 gx-md-4">
                    <div class="col-sm-6 mb-3"><a class="btn btn-outline-info w-100 rounded-pill" href="auth/google"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a></div>
                    <div class="col-sm-6 mb-3"><a class="btn btn-outline-info w-100 rounded-pill" href="assets/#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a></div>
                  </div>
                  <div class="d-flex align-items-center py-2 mb-2">
                    <hr class="w-100">
                    <div class="px-3">Or</div>
                    <hr class="w-100">
                  </div>










                  <form class="needs-validation" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row gx-2 gx-md-4">
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="name">First Name <span style="color:red;">*</span></label>
                        <input class="form-control"  id="name" type="text"  name="name" :value="old('name')" placeholder="Enter your full name" required autofocus autocomplete="name" >
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>


                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="sname">Middle Name</label>
                        <input class="form-control"  id="sname" type="text"  name="sname" :value="old('sname')" placeholder="Enter your Middle name" required autofocus autocomplete="sname" >
                        <x-input-error :messages="$errors->get('sname')" class="mt-2" />
                      </div>

                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="lname">Last name</label>
                        <input class="form-control"  id="lname" type="text"  name="lname" :value="old('lname')" placeholder="Enter your Last name" required autofocus autocomplete="lname" >
                        <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                      </div>

                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="email">Gender</label>
                        <select  class="form-control" id="gender" name="gender" required>
                          <option value="male">Male</option>
                          <option value="female"> Female</option>
                        </select>
                        <x-input-error :messages="$errors->get('email')" style="color:red;" class="mt-2" />
                      </div>

                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="email">Emaill address</label>
                        <input class="form-control" type="email" id="email" name="email"  placeholder="Enter your email" required>
                        <x-input-error :messages="$errors->get('email')" style="color:red;" class="mt-2" />
                      </div>

                  
                        <input class="form-control" type="hidden" id="account_type" value="job seeker" name="account_type"  placeholder="Enter your email" required>

                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="password">Password <span class='text-muted'>(min. 8 char)</span></label>
                        <div class="password-toggle">
                          <input class="form-control" name="password" type="password" id="password" minlength="8" required required autocomplete="new-password">
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                      </div>
                      <div class="col-sm-6 mb-4">
                        <label class="form-label" for="password_confirmation">Confirm password</label>
                        <div class="password-toggle">
                          <input class="form-control" type="password" id="password-confirm" name="password_confirmation" minlength="8" required>
                          <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                          </label>
                          <x-input-error :messages="$errors->get('password-confirm')" class="mt-2" />

                        </div>
                      </div>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms">By joining, I agree to the <a href='#'>Terms of use</a> and <a href='#'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100 rounded-pill" type="submit">Sign up</button>

        </div>


                  </form>





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



      <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/nouislider/dist/nouislider.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>







