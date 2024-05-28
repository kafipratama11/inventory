@extends('layouts.main-layout')
@section('main')
<body>
      <div class="row">
            <div class="col">
                  <div>
                        <div class="card shadow-sm">
                              <div class="card-body">
                                    @include('partials.tables.purchase-table')
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col">
                  <div>
                        @include('partials.tables.purchase-detail')
                  </div>
            </div>
      </div>
      <div class="w-100 bg-secondary sticky-bottom d-flex align-items-center justify-content-center" style="height: 90px">
            <div style="width: 300px; height: 60px" class="bg-light d-flex align-items-center justify-content-center">
                  <div style="width: 45px; height: 45px;" class="p-0 m-0 bg-danger d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-plus-lg p-0 m-0" style="font-size: 22px"></i>
                  </div>
            </div>
      </div>
</body>
@endsection
