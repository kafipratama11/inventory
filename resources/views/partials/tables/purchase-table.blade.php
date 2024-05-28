<table class="table table-hover">
      <thead>
            <tr>
                  <th scope="col">No</th>
                  <th scope="col">Transaksi ID</th>
                  <th scope="col">Total</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col"></th>
            </tr>
      </thead>
      <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>T-{{ $transaction->transactionID }}</td>
                  <td>Rp{{ $transaction->total_payment }}</td>
                  <td>{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('d/m/Y') }}</td>
                  <td>
                        <div class="d-flex gap-1 align-items-center" style="font-size: 16px;">
                              <a href="" data-bs-toggle="modal" data-bs-target="#modalEditPurchase" >
                                    <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                          <i class="bi edit-icon bi-pencil-square" style=" color: white;"></i>
                                    </div>
                              </a>
                              <a href="" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample{{ $transaction->transactionID }}" aria-expanded="false" aria-controls="collapseWidthExample">
                                    <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                          <i class="bi edit-icon bi-box-seam" style=" color: white;"></i>
                                    </div>
                              </a>
                              <button class="m-0 p-0 border-0 bg-transparent" href="">
                                    <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                          <i class="bi delete-icon bi-trash3-fill" style=" color: white;"></i>
                                    </div>
                              </button>
                        </div>
                  </td>
            </tr>
            {{-- @include('partials.modals.update.purchase') --}}
            @endforeach
      </tbody>
</table>
