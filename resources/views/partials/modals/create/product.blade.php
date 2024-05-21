<form action="{{ route('products.store') }}" method="POST">
      @csrf
      <div class="modal fade" id="modalCreateProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan product</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1">
                                    @error('product_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                                    <input type="text" class="form-control" name="product_merk" id="exampleFormControlInput1">
                              </div>
                              <div class="row">
                                    <div class="col">
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                                <input type="number" class="form-control" name="price" id="exampleFormControlInput1">
                                                @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                          </div>
                                    </div>
                                    <div class="col">
                                          <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                                                <input type="number" class="form-control" name="qty" id="exampleFormControlInput1">
                                                @error('qty')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                          </div>
                                    </div>
                              </div>
                              <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
                                    <select class="form-select px-0" size="7" name="categoryID" aria-label="Size 7 select example">
                                          @foreach ($categoriesAll as $item)
                                          <option value="{{ $item->categoryID }}" class="p-2 px-3">{{ $item->category_name }}</option>
                                          @endforeach
                                          <option value="0" class="p-2">Lainnya</option>
                                    </select>
                                    @error('categoryID')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
