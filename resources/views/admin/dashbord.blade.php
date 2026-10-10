<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="{{ asset('Templet/dist/css/adminlte.min.css') }}" as="style" />
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('Templet/dist/css/adminlte.min.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                <div class="d-none d-md-inline text-start lh-1">
                  <span class="d-block fw-semibold">{{ Auth::user()->Username ?? 'Admin' }}</span>
                  <small class="text-secondary text-capitalize" style="font-size: 0.75rem;">{{ Auth::user()->Role ?? 'Admin' }}</small>
                </div>
                <img
                  src="{{ asset('Templet/dist/assets/img/user2-160x160.jpg') }}"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 shadow-sm" style="border-radius: 16px; overflow: hidden; border: 1px solid #e2e8f0; min-width: 280px; mt-2;">
                <!--begin::User Image-->
                <li class="user-header bg-white d-flex flex-column align-items-center justify-content-center p-4" style="border-bottom: 1px solid #f1f5f9; height: auto;">
                  <div class="position-relative mb-2">
                    <img
                      src="{{ asset('Templet/dist/assets/img/user2-160x160.jpg') }}"
                      class="rounded-circle shadow-sm"
                      alt="User Image"
                      style="width: 85px; height: 85px; object-fit: cover; border: 3px solid #fff;"
                    />
                  </div>
                  <h5 class="mb-1 fw-bold text-dark" style="font-size: 1.15rem;">{{ Auth::user()->NamaLengkap ?? Auth::user()->Username }}</h5>
                  <small class="text-secondary text-end" style="font-size: 0.85rem;">{{ Auth::user()->Email }}</small>
                </li>
                <!--end::User Image-->
                <!--begin::Logout-->
                <li class="user-footer bg-white px-3 pb-3 pt-2">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn w-100 d-flex align-items-center justify-content-center gap-3 fw-bold" style="background-color: #fff0f0; color: #dc2626; border: 1.5px solid #fecaca; border-radius: 12px; padding: 10px 16px; font-size: 0.92rem; transition: background 0.2s ease;" onmouseover="this.style.backgroundColor='#fee2e2'" onmouseout="this.style.backgroundColor='#fff0f0'">
                      Keluar
                    </button>
                  </form>
                </li>
                <!--end::Logout-->
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar shadow" data-bs-theme="light" style="background-color: #ffffff !important; border-right: 1px solid #f1f5f9;">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand" style="background-color: #ffffff; border: none !important; box-shadow: none !important;">
          <!--begin::Brand Link-->
       <a href="#" class="brand-link text-decoration-none" style="display: flex !important; align-items: center !important; justify-content: flex-start !important; gap: 10px; padding: 14px 16px 14px 16px !important; margin-left: -16px !important; border-bottom: none !important; border: none !important;">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('img/icon-bg-blue.svg') }}"
              alt="BookNest Logo"
              style="width: 40px; height: 40px; border-radius: 10px; flex-shrink: 0;"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <div style="text-align: left;">
              <span class="d-block fw-bold" style="color: #0f172a; font-size: 1.15rem; line-height: 1.2;">BookNest</span>
              <span class="d-block text-secondary" style="font-size: 0.8rem; font-weight: 400;">Perpustakaan Digital</span>
            </div>
            <!--end::Brand Text-->
        </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper" style="background-color: #ffffff;">
          <nav class="mt-3 px-2">
            <!--begin::Section Label-->
            <div class="d-flex align-items-center gap-2 px-2 mb-2">
              <hr class="flex-grow-1 m-0" style="border-color: #e2e8f0;">
              <span class="text-uppercase fw-semibold flex-shrink-0" style="color: #94a3b8; font-size: 0.68rem; letter-spacing: 0.1em;">Menu Utama</span>
              <hr class="flex-grow-1 m-0" style="border-color: #e2e8f0;">
            </div>
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column gap-1"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <!-- Dashboard - Active -->
              <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3 active" style="background-color: #2563eb; color: #ffffff; border-radius: 12px !important;">
                  <i class="ti ti-layout-dashboard" style="font-size: 1.2rem; color: #ffffff; min-width: 20px;"></i>
                  <span class="fw-semibold" style="font-size: 0.92rem;">Dashboard</span>
                </a>
              </li>
              <!-- Pendataan Barang -->
              <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3" style="color: #475569; border-radius: 12px !important;">
                  <i class="ti ti-package" style="font-size: 1.2rem; min-width: 20px;"></i>
                  <span style="font-size: 0.92rem;">Pendataan Barang</span>
                </a>
              </li>
              <!-- Kategori -->
              <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center gap-3 px-3 py-2 rounded-3" style="color: #475569; border-radius: 12px !important;">
                  <i class="ti ti-category" style="font-size: 1.2rem; min-width: 20px;"></i>
                  <span style="font-size: 0.92rem;">Kategori</span>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
        <style>
          .app-sidebar .nav-link:hover:not(.active) {
            background-color: #f8fafc !important;
            color: #1e293b !important;
          }
          .app-sidebar .sidebar-brand {
            border-bottom: none !important;
            box-shadow: none !important;
          }
          .app-sidebar .brand-link {
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
            border-bottom: none !important;
            box-shadow: none !important;
          }
          .app-sidebar .brand-link::after,
          .app-sidebar .brand-link::before {
            display: none !important;
          }
        </style>
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row align-items-stretch g-3">
              <!-- Start col -->
              <div class="col-lg-9 connectedSortable">
                <div class="card border-0 shadow-sm h-100 mb-4" style="border-radius: 20px; background: #ffffff;">
                  <div class="card-body p-4 d-flex flex-column">
                    <h4 class="fw-bold mb-3" style="color: #0f172a; font-size: 1.25rem;">Koleksi Buku</h4>
                    <div class="flex-grow-1 d-flex flex-column justify-content-center" style="background-color: #f8fafc; border-radius: 16px; padding: 15px 10px 10px 10px; border: 1px solid #f1f5f9;">
                      <div id="revenue-chart"></div>
                    </div>
                  </div>
                </div>               
              </div>
              <!-- /.Start col -->
              <!-- Start col -->
              <div class="col-lg-3 connectedSortable">
                <div class="card border-0 shadow-sm h-100 mb-4" style="border-radius: 20px; background: #ffffff;">
                  <div class="card-body p-4 d-flex flex-column">
                    <!-- Card Header -->
                    <div class="d-flex align-items-center gap-2 mb-4">
                      <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px; background-color: #e0e7ff; border-radius: 12px;">
                        <i class="ti ti-brand-audible" style="color: #00288E; font-size: 1.15rem;"></i>
                      </div>
                      <h5 class="fw-bold mb-0 text-truncate" style="color: #0f172a; font-size: 1.1rem;" title="Buku Baru Masuk">Buku Baru Masuk</h5>
                    </div>

                    <!-- Book Items Container -->
                    <div class="d-flex flex-column gap-3 flex-grow-1 justify-content-between">
                      <!-- Book Item 1 -->
                      <div class="position-relative p-3" style="background-color: #f5f7ff; border-radius: 14px;">
                        <span class="badge bg-white text-secondary font-monospace border-0 shadow-sm position-absolute" style="top: 12px; right: 12px; font-size: 0.68rem; padding: 3px 8px; border-radius: 6px; font-weight: 500;">Komputer</span>
                        <div class="d-flex align-items-start gap-3 pe-5">
                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="width: 44px; height: 44px; background-color: #0033a0; border-radius: 10px;">
                            <i class="bi bi-book text-white" style="font-size: 1.25rem;"></i>
                          </div>
                          <div>
                            <h6 class="fw-bold mb-1" style="color: #1e293b; font-size: 0.88rem; line-height: 1.3;">Designing Data-Intensive Applications</h6>
                            <p class="text-secondary mb-0" style="font-size: 0.78rem;">Martin Kleppmann</p>
                          </div>
                        </div>
                      </div>

                      <!-- Book Item 2 -->
                      <div class="position-relative p-3" style="background-color: #f5f7ff; border-radius: 14px;">
                        <span class="badge bg-white text-secondary font-monospace border-0 shadow-sm position-absolute" style="top: 12px; right: 12px; font-size: 0.68rem; padding: 3px 8px; border-radius: 6px; font-weight: 500;">Komputer</span>
                        <div class="d-flex align-items-start gap-3 pe-5">
                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="width: 44px; height: 44px; background-color: #0033a0; border-radius: 10px;">
                            <i class="bi bi-book text-white" style="font-size: 1.25rem;"></i>
                          </div>
                          <div>
                            <h6 class="fw-bold mb-1" style="color: #1e293b; font-size: 0.88rem; line-height: 1.3;">Designing Data-Intensive Applications</h6>
                            <p class="text-secondary mb-0" style="font-size: 0.78rem;">Martin Kleppmann</p>
                          </div>
                        </div>
                      </div>

                      <!-- Book Item 3 -->
                      <div class="position-relative p-3" style="background-color: #f5f7ff; border-radius: 14px;">
                        <span class="badge bg-white text-secondary font-monospace border-0 shadow-sm position-absolute" style="top: 12px; right: 12px; font-size: 0.68rem; padding: 3px 8px; border-radius: 6px; font-weight: 500;">Pengembangan Diri</span>
                        <div class="d-flex align-items-start gap-3 pe-5">
                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="width: 44px; height: 44px; background-color: #3b82f6; border-radius: 10px;">
                            <i class="bi bi-person-fill-gear text-white" style="font-size: 1.25rem;"></i>
                          </div>
                          <div>
                            <h6 class="fw-bold mb-1" style="color: #1e293b; font-size: 0.88rem; line-height: 1.3;">Atomic Habits</h6>
                            <p class="text-secondary mb-0" style="font-size: 0.78rem;">James Clear • Gramedia</p>
                          </div>
                        </div>
                      </div>

                      <!-- Book Item 4 -->
                      <div class="position-relative p-3" style="background-color: #f5f7ff; border-radius: 14px;">
                        <span class="badge bg-white text-secondary font-monospace border-0 shadow-sm position-absolute" style="top: 12px; right: 12px; font-size: 0.68rem; padding: 3px 8px; border-radius: 6px; font-weight: 500;">Pengembangan Diri</span>
                        <div class="d-flex align-items-start gap-3 pe-5">
                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="width: 44px; height: 44px; background-color: #3b82f6; border-radius: 10px;">
                            <i class="bi bi-person-fill-gear text-white" style="font-size: 1.25rem;"></i>
                          </div>
                          <div>
                            <h6 class="fw-bold mb-1" style="color: #1e293b; font-size: 0.88rem; line-height: 1.3;">Atomic Habits</h6>
                            <p class="text-secondary mb-0" style="font-size: 0.78rem;">James Clear • Gramedia</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('Templet/dist/js/adminlte.min.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>
    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>
    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [
          {
            name: 'Masuk',
            data: [160, 190, 230, 210, 280, 250, 310, 270, 290, 340, 320],
          },
        ],
        chart: {
          height: 380,
          type: 'area',
          toolbar: {
            show: false,
          },
          zoom: {
            enabled: false,
          },
          fontFamily: 'inherit',
        },
        colors: ['#2563eb'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
          width: 3,
          colors: ['#2563eb'],
        },
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.35,
            opacityTo: 0.05,
            stops: [0, 95, 100],
            colorStops: [
              { offset: 0, color: '#2563eb', opacity: 0.35 },
              { offset: 100, color: '#3b82f6', opacity: 0.02 }
            ]
          },
        },
        markers: {
          size: 5,
          colors: ['#ffffff'],
          strokeColors: '#2563eb',
          strokeWidth: 2.5,
          hover: {
            size: 7,
            sizeOffset: 3,
          },
        },
        grid: {
          borderColor: '#e2e8f0',
          strokeDashArray: 4,
          xaxis: {
            lines: {
              show: false,
            },
          },
          yaxis: {
            lines: {
              show: true,
            },
          },
          padding: {
            top: 10,
            right: 15,
            bottom: 0,
            left: 10
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov'],
          axisBorder: {
            show: true,
            color: '#cbd5e1',
          },
          axisTicks: {
            show: false,
          },
          labels: {
            style: {
              colors: '#64748b',
              fontSize: '12px',
              fontWeight: 500,
            },
          },
        },
        yaxis: {
          min: 0,
          max: 400,
          tickAmount: 4,
          labels: {
            style: {
              colors: '#94a3b8',
              fontSize: '12px',
            },
          },
        },
        tooltip: {
          theme: 'dark',
          custom: function({ series, seriesIndex, dataPointIndex, w }) {
            const months = ['JAN 2024', 'FEB 2024', 'MAR 2024', 'APR 2024', 'MEI 2024', 'JUN 2024', 'JUL 2024', 'AGU 2024', 'SEP 2024', 'OKT 2024', 'NOV 2024'];
            const val = series[seriesIndex][dataPointIndex];
            const month = months[dataPointIndex] || 'NOV 2024';
            return `
              <div style="background: #1e293b; color: #fff; padding: 8px 12px; border-radius: 8px; font-family: inherit; font-size: 11px; min-width: 130px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.3);">
                <div style="color: #94a3b8; font-weight: 700; margin-bottom: 4px; font-size: 10px; letter-spacing: 0.5px;">${month}</div>
                <div style="display: flex; align-items: center; justify-content: space-between; gap: 12px;">
                  <span style="display: flex; align-items: center; gap: 5px; color: #cbd5e1;">
                    <span style="width: 6px; height: 6px; background-color: #2dd4bf; border-radius: 50%; display: inline-block;"></span>
                    <span>Masuk:</span>
                  </span>
                  <strong style="font-weight: 700; color: #ffffff;">${val}</strong>
                </div>
              </div>
            `;
          }
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
