<form action="{{ route('detail.transaction.update', ['DtransactionID' => $dtransaction->DtransactionID]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="modal fade" id="modalEditDetailPurchase{{ $dtransaction->DtransactionID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit purchase</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                              <input type="number" class="form-control" hidden value="{{ $transaction->transactionID }}" name="transactionID" id="exampleFormControlInput1">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pilih Barang</label>
                                    <select class="form-select" name="productID" aria-label="Default select example">
                                          <option selected>Open this select menu</option>
                                          @foreach ($products as $item)
                                          <option value="{{ $item->productID }}">{{ $item->product_name }}</option>
                                          @endforeach
                                    </select>
                              </div>
                              <div class="row">
                                    <div class="col">
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                                                <input type="number" value="{{ $dtransaction->amount }}" name="amount" class="form-control" id="exampleFormControlInput1">
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn bg-transparent border-0" data-bs-dismiss="modal" style="font-size: 14px;">Close</button>
                              <button type="submit" class="btn border-0 text-light rounded-pill px-3" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); font-size: 14px;">Create</button>
                        </div>
                  </div>
            </div>
      </div>
</form>
