@extends('layouts.main-layout')
@section('main')
<body>
      <div class="d-flex">
            @include('partials.sidebar.sidebar-admin')
            <div class="w-100" style="background-color: #EEF5FF">
                  <div class="p-3">
                        <div class="fw-semibold text-black">Products</div>
                        @include('partials.card-total')
                        <div class="row mt-3">
                              <div class="col-4">
                                    <div class="card shadow-sm">
                                          <div class="fw-medium text-black mb-2 text-center card-header border-0" style="font-size: 14px">Jenis Barang</div>
                                          <div class="card-body">
                                                <table class="table table-hover">
                                                      <thead>
                                                            <tr>
                                                                  <th scope="col">Kategori</th>
                                                                  <th scope="col">Jumlah Produk</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            @foreach ($categories as $category)
                                                            <tr>
                                                                  <td>{{ $category->category_name }}</td>
                                                                  <td>{{ $category->product_count }}</td>
                                                            </tr>
                                                            @endforeach
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                              </div>
                              <div class="col">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="mb-2">
                                                      <button class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#modalCreateProduct" style="font-size: 14px;">Add product</button>
                                                      @include('partials.modals.create.product')
                                                </div>
                                                <table class="table table-hover" id="myTable">
                                                      <thead>
                                                            <tr>
                                                                  <th scope="col">No</th>
                                                                  <th scope="col">Kode Barang</th>
                                                                  <th scope="col">Nama Barang</th>
                                                                  <th scope="col">Jenis Barang</th>
                                                                  <th scope="col">Jumlah</th>
                                                                  <th scope="col">Harga</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            @foreach ($products as $product)
                                                            <tr>
                                                                  <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                                                  <td>BRG-{{ $product->productID }}</td>
                                                                  <td>{{ $product->product_name }}</td>
                                                                  <td>{{ $product->category->category_name }}</td>
                                                                  <td class="text-center">{{ $product->qty }}</td>
                                                                  <td>Rp{{ $product->price }}</td>
                                                            </tr>
                                                            @endforeach
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <script>
            const ctx = document.getElementById('myChartPemakaian');

            new Chart(ctx, {
                  type: 'bar'
                  , data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
                        , datasets: [{
                              label: '# of Votes'
                              , data: [12, 19, 3, 5, 2, 3]
                              , borderWidth: 1
                        }]
                  }
                  , options: {
                        scales: {
                              y: {
                                    beginAtZero: true
                              }
                        }
                  }
            });

      </script>
</body>
@endsection
