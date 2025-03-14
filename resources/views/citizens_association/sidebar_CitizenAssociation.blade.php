<aside class="left-sidebar with-vertical">
      <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./main/index.html" class="text-nowrap logo-img">
            <img src="{{asset('assets/images/logos/logo3.svg')}}" class="dark-logo" alt="Logo-Dark" />
            <img src="{{asset('assets/images/logos/light-logo.svg')}}" class="light-logo" alt="Logo-light" />
          </a>
          <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
          </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ---------------------------------- -->
            <!-- Home -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/home" aria-expanded="false">
                <span>
                  <i class="ti ti-home"></i>
                </span>
                <span class="hide-menu">Beranda</span>
              </a>
            </li>
            {{-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Bendahara</span>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/member" id="get-url" aria-expanded="false">
                <!--<span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Kelola Data Warga</span>-->
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/users" id="get-url" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Kelola Data Warga</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/administrator" aria-expanded="false">
                <span>
                  <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">Kelola Data Pengelola</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/complaint" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Penyetujuan Pengaduan</span>
              </a>
            </li> --}}
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/waste_bank" aria-expanded="false">
                <span>
                  <i class="ti ti-wallet"></i>
                </span>
                <span class="hide-menu">Kelola Data Bank Sampah</span>
              </a>
            </li> --}}
            
            

            <!-- ---------------------------------- -->
            <!-- Frontend page -->
            <!-- ---------------------------------- -->
            {{-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-layout-grid"></i>
                </span>
                <span class="hide-menu">Frontend page</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="./main/frontend-landingpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Homepage</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="./main/frontend-aboutpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">About Us</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="./main/frontend-contactpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Contact Us</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="./main/frontend-blogpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Blog</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="./main/frontend-blogdetailpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Blog Details</span>
                  </a>
                </li>
              </ul>
            </li> --}}

            <!-- ---------------------------------- -->
            <!-- Apps -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Kelola Bendahara</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/citizen_associations/region" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">Data Kategori Wilayah</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./main/app-kanban.html" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Data Bendahara</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- DOCUMENTATION -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">DOCUMENTATION</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="./docs/index.html" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Penyetujuan Laporan</span>
              </a>
            </li>
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="./main/index5.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">History Data Pembayaran </span>
              </a>
            </li> --}}
            <!-- ---------------------------------- -->
            <!-- OTHER -->
            <!-- ---------------------------------- -->
            {{-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">OTHER</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-box-multiple"></i>
                </span>
                <span class="hide-menu">Menu Level</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="javascript:void(0)" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Level 1</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Level 1.1</span>
                  </a>
                  <ul aria-expanded="false" class="collapse two-level">
                    <li class="sidebar-item">
                      <a href="javascript:void(0)" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Level 2</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Level 2.1</span>
                      </a>
                      <ul aria-expanded="false" class="collapse three-level">
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Level 3</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Level 3.1</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-ban"></i>
                </span>
                <span class="hide-menu">Disabled</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#sub" aria-expanded="false">
                <i class="ti ti-star"></i>
                <div class="hide-menu lh-base">
                  <span class="hide-menu d-block">SubCaption</span>
                  <span class="hide-menu d-block fs-2">This is the sutitle</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-award"></i>
                  </span>
                  <span class="hide-menu">Chip</span>
                </div>
                <div class="hide-menu">
                  <span class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-mood-smile"></i>
                  </span>
                  <span class="hide-menu">Outlined</span>
                </div>
                <span class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-star"></i>
                </span>
                <span class="hide-menu">External Link</span>
              </a>
            </li> --}}
          </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="{{asset('assets/images/profile/user-1.jpg')}}" class="rounded-circle" width="40" height="40" alt="modernize-img" />
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
              <span class="fs-2">Designer</span>
            </div>
            <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
              <i class="ti ti-power fs-6"></i>
            </button>
          </div>
        </div>

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
      </div>
    </aside>