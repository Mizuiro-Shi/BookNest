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
        <!-- Dashboard -->
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
