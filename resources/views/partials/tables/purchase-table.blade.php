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
                              <a href="" data-bs-toggle="modal" data-bs-target="#modalEditPurchase{{ $transaction->transactionID }}">
                                    <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                          <i class="bi edit-icon bi-pencil-square" style=" color: white;"></i>
                                    </div>
                              </a><form action="" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal fade" id="modalEditPurchase{{ $transaction->transactionID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit transaksi</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body px-4">
                                                            <input type="hidden" name="productID" value="{{ $transaction->transactionID }}">
                                                            <div class="fw-light text-secondary mb-2" style="font-size: 12px">Tanggal : {{ \Carbon\Carbon::parse($transaction->transaction_date)->format('d/m/Y') }}</div>
                                                            <label for="product_name">Date</label>
                                                            <input type="date" id="" name="" class="form-control" value="" required>
                                                            <br>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn bg-transparent border-0" data-bs-dismiss="modal" style="font-size: 14px;">Close</button>
                                                            <button type="submit" class="btn border-0 text-light rounded-pill px-3" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); font-size: 14px;">Create</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </form>
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
