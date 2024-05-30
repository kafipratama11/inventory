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
                                                      @include('partials.modals.create.purchase-admin')
                                                </div>
                                                @include('partials.tables.purchase-table')
                                          </div>
                                    </div>
                              </div>
                              <div class="col">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium mb-3">Detail transaksi</div>
                                                @foreach ($transactions as $transaction)
                                                @include('partials.modals.create.purchase-detail-admin')
                                                <div class="collapse py-2 px-1" id="collapseWidthExample{{ $transaction->transactionID }}" style="min-height: 200px">
                                                      <div class="d-flex align-items-center mb-2">
                                                            <div class="mb-2" style="font-size: 12px">Transaksi ID : T-{{ $transaction->transactionID }}</div>
                                                            <button type="button" class="btn btn-add-items border-0 rounded-pill ms-auto text-light pe-3" data-bs-toggle="modal" data-bs-target="#modalCreatePurchase{{ $transaction->transactionID }}" style="font-size: 12px;">
                                                                  Add items
                                                                  <i class="bi bi-plus-lg"></i>
                                                            </button>
                                                            <a class="btn m-0 p-0 ms-3" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample{{ $transaction->transactionID }}" aria-expanded="false" aria-controls="collapseWidthExample">
                                                                  <i class="bi bi-x-lg"></i>
                                                            </a>
                                                      </div>
                                                      <table class="table table-hover">
                                                            <thead>
                                                                  <tr>
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">Nama</th>
                                                                        <th scope="col">Merk</th>
                                                                        <th scope="col">Jumlah</th>
                                                                        <th scope="col">Harga</th>
                                                                        <th scope="col">Total</th>
                                                                        <th scope="col"></th>
                                                                  </tr>
                                                            </thead>
                                                            <tbody>
                                                                  @foreach ($transaction->dtransactions as $dtransaction)
                                                                  <tr>
                                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                                        <td>{{ optional($dtransaction->product)->product_name ?? 'Produk tidak tersedia' }}</td>
                                                                        <td>{{ optional($dtransaction->product)->product_merk ?? '-' }}</td>
                                                                        <td>{{ $dtransaction->amount }}</td>
                                                                        <td>Rp{{ optional($dtransaction->product)->price ?? 0 }}</td>
                                                                        <td>Rp{{ $dtransaction->amount * (optional($dtransaction->product)->price ?? 0) }}</td>
                                                                        <td>
                                                                              <div class="d-flex gap-1 align-items-center" style="font-size: 16px;">
                                                                                    <a href="" data-bs-toggle="modal" data-bs-target="#modalEditDetailPurchase{{ $dtransaction->DtransactionID }}">
                                                                                          <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                                                                                <i class="bi edit-icon bi-pencil-square" style="color: white;"></i>
                                                                                          </div>
                                                                                    </a>
                                                                                    <button class="m-0 p-0 border-0 bg-transparent">
                                                                                          <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                                                                                <i class="bi delete-icon bi-trash3-fill" style="color: white;"></i>
                                                                                          </div>
                                                                                    </button>
                                                                              </div>
                                                                        </td>
                                                                  </tr>
                                                                  @include('partials.modals.update.purchase-admin')
                                                                  @endforeach
                                                            </tbody>
                                                      </table>
                                                      @if ($transaction->dtransactions->isEmpty())
                                                            <div style="font-size: 12px" class="text-center">tidak ada item</div>
                                                      @endif
                                                </div>
                                                @endforeach
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
@endsection
