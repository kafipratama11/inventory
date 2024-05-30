<form action="{{ route('product.update', ['productID' => $product->productID]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="modal fade" id="modalEditProduct{{ $product->productID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit product</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-4">
                              <input type="hidden" name="productID" value="{{ $product->productID }}">

                              <label for="product_name">Product Name</label>
                              <input type="text" id="product_name" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
                              <br>

                              <label for="product_merk">Product Merk</label>
                              <input type="text" id="product_merk" name="product_merk" class="form-control" value="{{ $product->product_merk }}">
                              <br>

                              <label for="price">Price</label>
                              <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
                              <br>

                              <label for="qty">Quantity</label>
                              <input type="number" id="qty" name="qty" class="form-control" value="{{ $product->qty }}" required>
                              <br>

                              <label for="categoryID">Category</label>
                              <input readonly type="text" value="{{ $product->category->category_name }}" class="form-control mb-2" id="categoryID">
                                    <select class="form-select px-0" size="7" name="categoryID" aria-label="Size 7 select example">
                                          @foreach ($categoriesAll as $item)
                                          <option value="{{ $item->categoryID }}" class="p-2 px-3">{{ $item->category_name }}</option>
                                          @endforeach
                                          <option value="0" class="p-2">Lainnya</option>
                                    </select>
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
