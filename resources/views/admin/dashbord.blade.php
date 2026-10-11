@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
  <!--begin::Row-->
  <div class="row align-items-stretch g-3">

    <!-- Kolom Kiri: Grafik Koleksi Buku -->
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
    <!-- /.col-lg-9 -->

    <!-- Kolom Kanan: Buku Baru Masuk -->
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
            @forelse($bukuTerbaru as $buku)
              @php
                $kategori = $buku->kategoris->first();
              @endphp
              <div class="p-3" style="background-color: #f5f7ff; border-radius: 16px;">
                <div class="d-flex align-items-center gap-3">
                  <!-- Icon / Cover Buku (Kiri) -->
                  <div class="d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm" style="width: 52px; height: 64px; background-color: #00288e; border-radius: 12px; overflow: hidden;">
                    @if($buku->img)
                      <img src="{{ asset('storage/' . $buku->img) }}" alt="{{ $buku->Judul }}" style="width: 100%; height: 100%; object-fit: cover;" />
                    @else
                      <i class="bi bi-book text-white" style="font-size: 1.5rem;"></i>
                    @endif
                  </div>

                  <!-- Detail Buku (Kanan: Judul, Penulis, Kategori di bawah) -->
                  <div class="flex-grow-1 min-w-0">
                    <h6 class="fw-bold mb-1 text-truncate" style="color: #0f172a; font-size: 0.95rem; line-height: 1.25;" title="{{ $buku->Judul }}">
                      {{ $buku->Judul }}
                    </h6>
                    <p class="text-secondary mb-2 text-truncate" style="font-size: 0.8rem; line-height: 1.2;" title="{{ $buku->Penulis }}">
                      {{ $buku->Penulis }}
                    </p>
                    <div>
                      <span class="badge bg-white text-secondary font-monospace border-0 shadow-sm" style="font-size: 0.7rem; padding: 4px 10px; border-radius: 6px; font-weight: 500;">
                        {{ $kategori->NamaKategori ?? 'Umum' }}
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="text-center py-4 text-muted">
                <i class="bi bi-journal-x" style="font-size: 2rem;"></i>
                <p class="mb-0 mt-2 small">Belum ada buku baru</p>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-lg-3 -->

  </div>
  <!--end::Row-->
@endsection

@push('scripts')
<script>
  const monthsData = @json($months);
  const countsData = @json($counts);

  const sales_chart_options = {
    series: [
      {
        name: 'Total Koleksi',
        data: countsData,
      },
    ],
    chart: {
      height: 380,
      type: 'area',
      toolbar: { show: false },
      zoom: { enabled: false },
      fontFamily: 'inherit',
    },
    colors: ['#2563eb'],
    dataLabels: { enabled: false },
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
      hover: { size: 7, sizeOffset: 3 },
    },
    grid: {
      borderColor: '#e2e8f0',
      strokeDashArray: 4,
      xaxis: { lines: { show: false } },
      yaxis: { lines: { show: true } },
      padding: { top: 10, right: 15, bottom: 0, left: 10 }
    },
    xaxis: {
      categories: monthsData,
      axisBorder: { show: true, color: '#cbd5e1' },
      axisTicks: { show: false },
      labels: {
        style: { colors: '#64748b', fontSize: '12px', fontWeight: 500 },
      },
    },
    yaxis: {
      min: 0,
      forceNiceScale: true,
      labels: {
        style: { colors: '#94a3b8', fontSize: '12px' },
        formatter: function (val) {
          return Math.round(val);
        }
      },
    },
    tooltip: {
      theme: 'dark',
      y: {
        formatter: function (val) {
          return val + " Buku";
        }
      }
    },
  };

  const sales_chart = new ApexCharts(
    document.querySelector('#revenue-chart'),
    sales_chart_options,
  );
  sales_chart.render();
</script>
@endpush
