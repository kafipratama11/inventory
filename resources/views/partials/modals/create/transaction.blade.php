<form action="{{ route('purchase.store') }}" method="POST">
      @csrf
      <div class="modal fade" id="modalCreateTransaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Create new transaction</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal transaksi</label>
                                    <input type="date" class="form-control" name="transaction_date" id="exampleFormControlInput1">
                                    <input type="number" hidden value="0" class="form-control" name="total_payment"  id="exampleFormControlInput1">
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