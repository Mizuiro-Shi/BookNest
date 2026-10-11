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
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 shadow-sm" style="border-radius: 16px; overflow: hidden; border: 1px solid #e2e8f0; min-width: 280px;">
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
              <button
                type="submit"
                class="btn w-100 d-flex align-items-center justify-content-center gap-3 fw-bold"
                style="background-color: #fff0f0; color: #dc2626; border: 1.5px solid #fecaca; border-radius: 12px; padding: 10px 16px; font-size: 0.92rem; transition: background 0.2s ease;"
                onmouseover="this.style.backgroundColor='#fee2e2'"
                onmouseout="this.style.backgroundColor='#fff0f0'"
              >
                Keluar
              </button>
            </form>
          </li>
          <!--end::Logout-->
        </ul>
      </li>
      <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
  </div>
  <!--end::Container-->
</nav>
<!--end::Header-->
