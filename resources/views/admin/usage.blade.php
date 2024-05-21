@extends('layouts.main-layout')
@section('main')
<body>
      <div class="d-flex">
            @include('partials.sidebar.sidebar-admin')
            <div class="w-100" style="background-color: #EEF5FF">
                  <div class="p-3">
                        <div class="fw-semibold text-black">Usage</div>
                        @include('partials.card-total')
                        <div class="row mt-3">
                              <div class="col-4">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium text-secondary">Pemakaian Barang per 3 Bulan</div>
                                                <canvas id="myChartPemakaian"></canvas>
                                          </div>
                                    </div>
                              </div>
                              <div class="col">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                @include('partials.tables.usage-table')
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
@endsection
