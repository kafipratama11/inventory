@extends('layouts.main-layout')
@section('main')
<body>
      <div class="d-flex">
            @include('partials.sidebar.sidebar-admin')
            <div class="w-100" style="background-color: #EEF5FF">
                  <div class="p-3">
                        <div class="fw-semibold text-black">Purchase</div>
                        @include('partials.card-total')
                        <div class="row mt-3">
                              <div class="col-5">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="mb-2">
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn border-0 text-light pe-3" data-bs-toggle="modal" data-bs-target="#modalCreateTransaction" style="font-size: 14px; background-color: #344C64;">
                                                            New purchase
                                                            <i class="bi bi-plus-lg"></i>
                                                      </button>
                                                      <!-- Modal -->
                                                      @include('partials.modals.create.transaction')
                                                </div>
                                                @include('partials.tables.purchase-table')
                                          </div>
                                    </div>
                              </div>
                              <div class="col">
                                    @include('partials.tables.purchase-detail')
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
@endsection
