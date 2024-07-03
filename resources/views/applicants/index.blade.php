@include('applicants.header.nav')
      <!-- Hero-->
      <section class="bg-dark pb-4 pt-5">
        <div class="container py-5">
          <div class="row align-items-center mt-2 mt-md-0 pt-md-4 pt-lg-5 pb-5">
            <div class="col-md-5 order-md-2 mb-5 mb-md-0">
              <div class="parallax mx-auto" style="max-width: 526px;">
                <div class="parallax-layer position-relative" data-depth="0.1"><img src="assets/img/job-board/hero-banner-1/layer01.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.16"><img src="assets/img/job-board/hero-banner-1/layer02.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.38"><img src="assets/img/job-board/hero-banner-1/layer03.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.16"><img src="assets/img/job-board/hero-banner-1/layer04.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.16"><img src="assets/img/job-board/hero-banner-1/layer05.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.45"><img src="assets/img/job-board/hero-banner-1/layer06.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.3"><img src="assets/img/job-board/hero-banner-1/layer07.svg" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.2"><img src="assets/img/job-board/hero-banner-1/layer08.svg" alt="Layer"></div>
              </div>
            </div>
            <div class="col-md-7 order-md-1">
              <h1 class="display-4 text-light pb-2 mb-4 mb-lg-5" style="max-width: 29.5rem;">Hack your way to the <span class='text-primary'>dream job</span></h1>
              <h2 class="h5 text-light mb-4">Popular requests:</h2>
              <div class="d-flex flex-wrap"><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm me-2 mb-2" href="assets/#"><i class="fi-search me-2"></i>Engineer</a><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm me-2 mb-2" href="assets/#"><i class="fi-search me-2"></i>Customer Service</a><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm me-2 mb-2" href="assets/#"><i class="fi-search me-2"></i>Delivery</a><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm me-2 mb-2" href="assets/#"><i class="fi-search me-2"></i>Cashier</a><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm me-2 mb-2" href="assets/#"><i class="fi-search me-2"></i>Remote</a><a class="btn btn-translucent-light btn-xs rounded-pill fs-sm mb-2" href="assets/#"><i class="fi-search me-2"></i>IT</a></div>
            </div>
          </div>
          <!-- Search form-->
          <form class="form-group form-group-light d-block rounded-xl-pill mt-n3 mt-md-4 mt-xl-5 mb-md-4">
            <div class="row align-items-center g-0 ms-n2">
              <div class="col-md-5 col-xl-3">
                <div class="input-group input-group-lg border-end-md border-light"><span class="input-group-text text-light rounded-pill opacity-50 ps-3"><i class="fi-search"></i></span>
                  <input class="form-control" type="text" placeholder="Search site...">
                </div>
              </div>
              <hr class="hr-light d-md-none my-2">
              <div class="col-md-7 col-xl-4 d-sm-flex">
                <div class="dropdown w-sm-50 border-end-sm border-light" data-bs-toggle="select">
                  <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">Location</span></button>
                  <input type="hidden">
                  <ul class="dropdown-menu dropdown-menu-dark my-3">
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">Dallas</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">Chicago</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">Houston</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">Las Vegas</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">Los Angeles</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">New York</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">San Francisco</span></a></li>
                  </ul>
                </div>
                <hr class="hr-light d-sm-none my-2">
                <div class="dropdown w-sm-50 border-end-xl border-light" data-bs-toggle="select">
                  <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fi-geo me-2"></i><span class="dropdown-toggle-label">Distance</span></button>
                  <input type="hidden">
                  <ul class="dropdown-menu dropdown-menu-dark my-3">
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">10 miles</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">20 miles</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">30 miles</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">40 miles</span></a></li>
                    <li><a class="dropdown-item" href="assets/#"><span class="dropdown-item-label">50 miles</span></a></li>
                  </ul>
                </div>
              </div>
              <hr class="hr-light d-xl-none mt-2 mb-3">
              <div class="col-xl-5 d-sm-flex align-items-center">
                <div class="d-flex align-items-center w-100 ms-xl-1 ps-3">
                  <div class="text-light text-nowrap opacity-60 me-sm-1"><i class="fi-cash fs-lg me-2"></i>Salary range</div>
                  <div class="range-slider range-slider-light mt-1 pe-0 pe-sm-3" data-start-min="5000" data-start-max="14000" data-min="1000" data-max="20000" data-step="500">
                    <div class="range-slider-ui"></div>
                  </div>
                </div>
                <button class="btn btn-primary btn-lg w-100 w-sm-50 w-lg-auto rounded-pill mt-4 mt-sm-0" type="button">Find jobs</button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Categories-->
      <section class="position-relative bg-white rounded-xxl-4 pt-md-3 zindex-5" style="margin-top: -30px;">
        <div class="container pt-5 pb-2 mb-4 mb-md-5">
          <h2 class="h3 pb-2 pb-sm-3">Jobs by category</h2>
          <div class="d-flex flex-wrap flex-column flex-sm-row"><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-accounting"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Accounting</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-pie-chart"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Marketing &amp; PR</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-meds"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Medicine</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-plant"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Agriculture</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-computer"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">IT</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="assets/job-board-catalog.html">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-security"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Security</h3></a>
            <div class="dropdown mb-2 mb-sm-3"><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4" href="assets/job-board-catalog.html" data-bs-toggle="dropdown">
                <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-dots-horisontal"></i></div>
                <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">More</h3></a>
              <div class="dropdown-menu dropdown-menu-sm-end my-1"><a class="dropdown-item fw-bold" href="assets/job-board-catalog.html"><i class="fi-briefcase fs-base opacity-60 me-2"></i>Management</a><a class="dropdown-item fw-bold" href="assets/job-board-catalog.html"><i class="fi-building fs-base opacity-60 me-2"></i>Construction</a><a class="dropdown-item fw-bold" href="assets/job-board-catalog.html"><i class="fi-car fs-base opacity-60 me-2"></i>Transportation</a><a class="dropdown-item fw-bold" href="assets/job-board-catalog.html"><i class="fi-cart fs-base opacity-60 me-2"></i>Retail &amp; Shopping</a><a class="dropdown-item fw-bold" href="assets/job-board-catalog.html"><i class="fi-cash fs-base opacity-60 me-2"></i>Finance</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Banners-->
      <section class="container mb-4 mb-md-5">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card h-100">
              <div class="d-sm-flex align-items-center">
                <div class="pt-4 ps-sm-4 py-sm-4 p-lg-5 flex-shrink-0"><img class="d-block mx-auto" src="assets/img/pricing/icon-4.svg" width="86" alt="Icon"></div>
                <div class="card-body text-center text-sm-start">
                  <h2 class="h5 mb-2">Recently added jobs</h2>
                  <p class="mb-sm-4">Nulla sit congue nunc lacus, laoreet nulla iaculis faucibus. Ut morbi enim.</p><a class="fw-bold text-decoration-none py-1" href="assets/job-board-catalog.html">Find jobs<i class="fi-chevron-right fs-xs ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card h-100">
              <div class="d-sm-flex align-items-center">
                <div class="pt-4 ps-sm-4 py-sm-4 p-lg-5 flex-shrink-0"><img class="d-block mx-auto" src="assets/img/pricing/icon-1.svg" width="86" alt="Icon"></div>
                <div class="card-body text-center text-sm-start">
                  <h2 class="h5 mb-2">Urgently hiring</h2>
                  <p class="mb-sm-4">Viverra gravida id magna diam enim morbi enim mi vestibulum. Mus aliquet ut facilisi elit.</p><a class="fw-bold text-decoration-none py-1" href="assets/job-board-catalog.html">Find jobs<i class="fi-chevron-right fs-xs ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Jobs list + Post resume CTA-->
      <section class="container pb-5 mb-md-4">
        <div class="row">
          <div class="col-md-6 mb-3 mb-md-0">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-sm-2">
              <h2 class="h3 mb-sm-0">Jobs of the day</h2><a class="btn btn-link fw-normal p-0" href="assets/job-board-catalog.html">View all<i class="fi-arrow-long-right ms-2"></i></a>
            </div>
            <!-- Accordion-->
            <div id="accordionJobs">
              <div class="card bg-secondary collapsed mb-2" data-bs-toggle="collapse" data-bs-target="#jobCollapse1">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex align-items-center"><img class="me-2" src="assets/img/job-board/company/it-pro.png" width="24" alt="IT Pro Logo"><span class="fs-sm text-dark opacity-80 ps-1">IT Pro TV</span></div><span class="badge bg-faded-danger rounded-pill fs-sm">Hot</span>
                  </div>
                  <h3 class="h6 card-title pt-1 mb-0">Business Analyst</h3>
                </div>
                <div class="collapse" id="jobCollapse1" data-bs-parent="#accordionJobs">
                  <div class="card-body mt-n1 pt-0">
                    <p class="fs-sm">Euismod nec sagittis sit arcu libero, metus. Aliquam nisl rhoncus porttitor volutpat, ante cras tincidunt. Nec sit nunc, ornare tincidunt enim, neque. Ornare pulvinar enim fames orci enim in libero. <a href='#'>Read more...</a></p>
                    <div class="d-flex align-items-center justify-content-between"> 
                      <div class="fs-sm"><span class="text-nowrap me-3"><i class="fi-map-pin text-muted me-1"> </i>Chicago</span><span class="text-nowrap me-3"><i class="fi-cash fs-base text-muted me-1"></i>$7,500</span></div>
                      <button class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle" type="button" data-bs-toggle="tooltip" title="Add to saved jobs"><i class="fi-heart"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card bg-secondary mb-2" data-bs-toggle="collapse" data-bs-target="#jobCollapse2">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex align-items-center"><img class="me-2" src="assets/img/job-board/company/xbox.png" width="24" alt="Xbox Logo"><span class="fs-sm text-dark opacity-80 ps-1">Xbox Company</span></div><span class="badge bg-faded-accent rounded-pill fs-sm">Featured</span>
                  </div>
                  <h3 class="h6 card-title pt-1 mb-0">Full-Stack Developer</h3>
                </div>
                <div class="collapse show" id="jobCollapse2" data-bs-parent="#accordionJobs">
                  <div class="card-body mt-n1 pt-0">
                    <p class="fs-sm">Euismod nec sagittis sit arcu libero, metus. Aliquam nisl rhoncus porttitor volutpat, ante cras tincidunt. Nec sit nunc, ornare tincidunt enim, neque. Ornare pulvinar enim fames orci enim in libero. <a href='#'>Read more...</a></p>
                    <div class="d-flex align-items-center justify-content-between"> 
                      <div class="fs-sm"><span class="text-nowrap me-3"><i class="fi-map-pin text-muted me-1"> </i>Washington</span><span class="text-nowrap me-3"><i class="fi-cash fs-base text-muted me-1"></i>$13,000</span></div>
                      <button class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle" type="button" data-bs-toggle="tooltip" title="Add to saved jobs"><i class="fi-heart"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card bg-secondary collapsed mb-2" data-bs-toggle="collapse" data-bs-target="#jobCollapse3">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex align-items-center"><img class="me-2" src="assets/img/job-board/company/xampp.png" width="24" alt="XAMPP Logo"><span class="fs-sm text-dark opacity-80 ps-1">XAMPP Company</span></div><span class="badge bg-faded-danger rounded-pill fs-sm">Hot</span>
                  </div>
                  <h3 class="h6 card-title pt-1 mb-0">Sales Manager</h3>
                </div>
                <div class="collapse" id="jobCollapse3" data-bs-parent="#accordionJobs">
                  <div class="card-body mt-n1 pt-0">
                    <p class="fs-sm">Euismod nec sagittis sit arcu libero, metus. Aliquam nisl rhoncus porttitor volutpat, ante cras tincidunt. Nec sit nunc, ornare tincidunt enim, neque. Ornare pulvinar enim fames orci enim in libero. <a href='#'>Read more...</a></p>
                    <div class="d-flex align-items-center justify-content-between"> 
                      <div class="fs-sm"><span class="text-nowrap me-3"><i class="fi-map-pin text-muted me-1"> </i>New Jersey</span><span class="text-nowrap me-3"><i class="fi-cash fs-base text-muted me-1"></i>$6,500</span></div>
                      <button class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle" type="button" data-bs-toggle="tooltip" title="Add to saved jobs"><i class="fi-heart"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card bg-secondary collapsed mb-2" data-bs-toggle="collapse" data-bs-target="#jobCollapse4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex align-items-center"><img class="me-2" src="assets/img/job-board/company/elastic.png" width="24" alt="Elastic Logo"><span class="fs-sm text-dark opacity-80 ps-1">Elastic Inc.</span></div><span class="badge bg-faded-accent rounded-pill fs-sm">Featured</span>
                  </div>
                  <h3 class="h6 card-title pt-1 mb-0">Senior Credit Analyst</h3>
                </div>
                <div class="collapse" id="jobCollapse4" data-bs-parent="#accordionJobs">
                  <div class="card-body mt-n1 pt-0">
                    <p class="fs-sm">Euismod nec sagittis sit arcu libero, metus. Aliquam nisl rhoncus porttitor volutpat, ante cras tincidunt. Nec sit nunc, ornare tincidunt enim, neque. Ornare pulvinar enim fames orci enim in libero. <a href='#'>Read more...</a></p>
                    <div class="d-flex align-items-center justify-content-between"> 
                      <div class="fs-sm"><span class="text-nowrap me-3"><i class="fi-map-pin text-muted me-1"> </i>Dallas</span><span class="text-nowrap me-3"><i class="fi-cash fs-base text-muted me-1"></i>$8,000</span></div>
                      <button class="btn btn-icon btn-light btn-xs text-primary shadow-sm rounded-circle" type="button" data-bs-toggle="tooltip" title="Add to saved jobs"><i class="fi-heart"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <hr class="hr-vertical mx-auto">
          </div>
          <div class="col-md-5 text-center text-md-start"><img class="d-block mx-auto mb-4" src="assets/img/job-board/illustrations/post-resume-cta2.svg" width="416" alt="Illustration">
            <h2 class="h3 pt-2 mb-4">Professional CV is your ticket to the dream job</h2>
            <p class="pb-md-3">Create a great resume on Finder and take a step toward finding your dream job!</p><a class="btn btn-primary btn-lg rounded-pill ms-sm-auto" href="assets/job-board-post-resume-1.html">Post resume<i class="fi-chevron-right fs-sm ms-2"></i></a>
          </div>
        </div>
      </section>
      <!-- Jobs by city-->
      <section class="container pt-2 pt-sm-0 pb-5 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-sm-2">
          <h2 class="h3 mb-sm-0">Jobs by city</h2><a class="btn btn-link fw-normal p-0" href="assets/job-board-catalog.html">View all<i class="fi-arrow-long-right ms-2"></i></a>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;420&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;700&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20},&quot;850&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 20},&quot;1300&quot;:{&quot;nav&quot;: false, &quot;items&quot;:5, &quot;gutter&quot;: 24}}}">
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/new-york.svg" alt="New York"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">New York</a><span class="fs-xs">328 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/paris.svg" alt="Paris"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">Paris</a><span class="fs-xs">152 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/london.svg" alt="London"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">London</a><span class="fs-xs">74 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/bangkok.svg" alt="Bangkok"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">Bangkok</a><span class="fs-xs">92 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/barcelona.svg" alt="Barcelona"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">Barcelona</a><span class="fs-xs">204 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/dubai.svg" alt="Dubai"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">Dubai</a><span class="fs-xs">196 jobs</span></div>
              </div>
            </div>
            <div>
              <div class="position-relative">
                <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="assets/img/job-board/city/kuala-lumpur.svg" alt="Kuala Lumpur"></div>
                <div class="text-center"><a class="nav-link stretched-link p-0" href="assets/job-board-catalog.html">Kuala Lumpur</a><span class="fs-xs">143 jobs</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Top companies-->
      <section class="container pb-5 mb-md-3 mt-n2 mt-sm-0">
        <h2 class="h3 text-center text-sm-start mb-sm-4">Top companies</h2>
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2},&quot;480&quot;:{&quot;items&quot;:3},&quot;680&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 12},&quot;850&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16},&quot;1100&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}">
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/microsoft.svg" width="196" alt="Microsoft"><img class="swap-from" src="assets/img/job-board/company/microsoft-g.svg" width="196" alt="Microsoft"></a></div>
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/indeed.svg" width="196" alt="Indeed"><img class="swap-from" src="assets/img/job-board/company/indeed-g.svg" width="196" alt="Indeed"></a></div>
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/cocacola.svg" width="196" alt="Coca Cola"><img class="swap-from" src="assets/img/job-board/company/cocacola-g.svg" width="196" alt="Coca Cola"></a></div>
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/slack.svg" width="196" alt="Slack"><img class="swap-from" src="assets/img/job-board/company/slack-g.svg" width="196" alt="Slack"></a></div>
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/walmart.svg" width="196" alt="Walmart"><img class="swap-from" src="assets/img/job-board/company/walmart-g.svg" width="196" alt="Walmart"></a></div>
            <div class="pb-1"><a class="swap-image" href="assets/job-board-employer-single.html"><img class="swap-to" src="assets/img/job-board/company/google.svg" width="196" alt="Google"><img class="swap-from" src="assets/img/job-board/company/google-g.svg" width="196" alt="Google"></a></div>
          </div>
        </div>
      </section>
      <!-- Mobile app CTA-->

      <!-- Blog-->
      <section class="container pb-4 pb-md-5 mb-2 mb-md-3">
        <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-sm-2">
          <h2 class="h3 mb-sm-0">Online journal by top HRs</h2><a class="btn btn-link fw-normal p-0" href="assets/job-board-blog.html">Go to blog<i class="fi-arrow-long-right ms-2"></i></a>
        </div>
        <div class="row">
          <div class="col-md-5 mb-4">
            <article class="card card-hover border-0 shadow-sm h-100"><a class="card-img-top overflow-hidden position-relative" href="assets/job-board-blog-single.html"><span class="badge bg-faded-info position-absolute top-0 end-0 fs-sm rounded-pill m-3">New</span><img class="d-block" src="assets/img/job-board/blog/03.jpg" alt="Image"></a>
              <div class="card-body pb-3"><a class="fs-xs text-uppercase text-decoration-none" href="assets/#">Guides</a>
                <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="assets/job-board-blog-single.html">How to Hire World-Class Engineers</a></h3>
                <p class="fs-sm text-muted m-0">Nunc, hac augue ante in facilisi id. Consectetur egestas orci, arcu ac tellus. Morbi orci, nunc dictum...</p>
              </div><a class="card-footer d-flex align-items-center text-decoration-none border-top-0 pt-0 mb-1" href="assets/#"><img class="rounded-circle" src="assets/img/avatars/16.png" width="44" alt="Avatar">
                <div class="ps-2">
                  <h6 class="fs-sm text-nav lh-base mb-1">Bessie Cooper</h6>
                  <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 me-1"></i>May 23</span><span><i class="fi-chat-circle opacity-70 me-1"></i>4 comments</span></div>
                </div></a>
            </article>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-sm-6 mb-4">
                <article class="card card-hover border-0 shadow-sm h-100"><a class="card-img-top overflow-hidden position-relative" href="assets/job-board-blog-single.html"><img class="d-block" src="assets/img/job-board/blog/04.jpg" alt="Image"></a>
                  <div class="card-body pb-3"><a class="fs-xs text-uppercase text-decoration-none" href="assets/#">Guides</a>
                    <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="assets/job-board-blog-single.html">How to Choose Your First Job In Tech</a></h3>
                  </div><a class="card-footer d-flex align-items-center text-decoration-none border-top-0 pt-0 mb-1" href="assets/#"><img class="rounded-circle" src="assets/img/avatars/18.png" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-nav lh-base mb-1">Annette Black</h6>
                      <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 me-1"></i>May 21</span><span><i class="fi-chat-circle opacity-70 me-1"></i>No comments</span></div>
                    </div></a>
                </article>
              </div>
              <div class="col-sm-6 mb-4">
                <article class="card card-hover border-0 shadow-sm h-100"><a class="card-img-top overflow-hidden position-relative" href="assets/job-board-blog-single.html"><img class="d-block" src="assets/img/job-board/blog/05.jpg" alt="Image"></a>
                  <div class="card-body pb-3"><a class="fs-xs text-uppercase text-decoration-none" href="assets/#">Tips &amp; Advice</a>
                    <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="assets/job-board-blog-single.html">15 Tips for a Better Resume</a></h3>
                  </div><a class="card-footer d-flex align-items-center text-decoration-none border-top-0 pt-0 mb-1" href="assets/#"><img class="rounded-circle" src="assets/img/avatars/17.png" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-nav lh-base mb-1">Ralph Edwards</h6>
                      <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 me-1"></i>May 19</span><span><i class="fi-chat-circle opacity-70 me-1"></i>1 comment</span></div>
                    </div></a>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    @include('applicants.footer.footer')