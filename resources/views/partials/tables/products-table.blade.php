<table class="table table-hover">
      <thead>
            <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Nama Merk</th>
                  <th scope="col">Jenis Barang</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga</th>
                  <th scope="col"></th>
            </tr>
      </thead>
      <tbody>
            @foreach ($products as $product)
            <tr>
                  <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                  <td>BRG-{{ $product->productID }}</td>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->product_merk ?? '-' }}</td>
                  <td>{{ $product->category->category_name }}</td>
                  <td class="text-center">{{ $product->qty }}</td>
                  <td>Rp{{ $product->price }}</td>
                  <td>
                        <div class="d-flex gap-1 align-items-center" style="font-size: 16px;">
                              <a href="" data-bs-toggle="modal" data-bs-target="#modalEditProduct{{ $product->productID }}">
                                    <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                          <i class="bi edit-icon bi-pencil-square" style="color: white;"></i>
                                    </div>
                              </a>
                              @include('partials.modals.update.product')
                              <form action="{{ route('product.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="productID" value="{{ $product->productID }}">
                                    <button type="submit" class="m-0 p-0 border-0 bg-transparent" onclick="return confirm('Are you sure you want to delete this product?');">
                                          <div class="btn-action-table d-flex justify-content-center align-items-center rounded-circle" style="width: 30px; height: 30px">
                                                <i class="bi delete-icon bi-trash3-fill" style="color: white;"></i>
                                          </div>
                                    </button>
                              </form>
                        </div>
                  </td>
            </tr>
            @endforeach
      </tbody>
</table>
