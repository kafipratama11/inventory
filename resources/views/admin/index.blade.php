@extends('layouts.main-layout')
@section('main')
<body>
      <div class="d-flex">
            @include('partials.sidebar.sidebar-admin')
            <div class="w-100" style="background-color: #EEF5FF">
                  <div class="container-xxl p-3">
                        <div class="fw-semibold text-black">Dashboard</div>
                        @include('partials.card-total')
                        <div class="row mt-3">
                              <div class="col-6">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium text-secondary">Pemakaian Barang</div>
                                                <canvas id="myChart"></canvas>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-6">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium text-secondary">Pembelian Barang</div>
                                                <canvas id="myChart2"></canvas>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="row mt-3">
                              <div class="col">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <table class="table table-hover">
                                                      <thead>
                                                            <tr>
                                                                  <th scope="col">No</th>
                                                                  <th scope="col">Kode Barang</th>
                                                                  <th scope="col">Jenis Barang</th>
                                                                  <th scope="col">Jumlah</th>
                                                                  <th scope="col">Tanggal Pembelian</th>
                                                                  <th scope="col">Tanggal Pemakaian</th>
                                                                  <th scope="col">Penggunaan</th>
                                                                  <th scope="col">Ruang</th>
                                                                  <th scope="col">Keterangan</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                                  <th scope="row">1</th>
                                                                  <td>BRG-001</td>
                                                                  <td>Elektronik</td>
                                                                  <td>6</td>
                                                                  <td>12/12/2024</td>
                                                                  <td>15/01/2025 - 18/01/2025</td>
                                                                  <td>Tetap</td>
                                                                  <td>R-001</td>
                                                                  <td>Pinjam</td>
                                                            </tr>
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
            document.addEventListener("DOMContentLoaded", function() {
                  var ctx = document.getElementById('myChart').getContext('2d');
                  var myChart = new Chart(ctx, {
                        type: 'line', // tipe chart, bisa 'line', 'bar', 'pie', dll.
                        data: {
                              labels: ['Jan - Feb', 'Mart - April', 'Mei - Juni', 'Juli - August', 'Sep - Oct', 'Nov - Des']
                              , datasets: [{
                                    label: '# of Votes'
                                    , data: [12, 19, 3, 5, 2, 3]
                                    , backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)'
                                          , 'rgba(54, 162, 235, 0.2)'
                                          , 'rgba(255, 206, 86, 0.2)'
                                          , 'rgba(75, 192, 192, 0.2)'
                                          , 'rgba(153, 102, 255, 0.2)'
                                          , 'rgba(255, 159, 64, 0.2)'
                                    ]
                                    , borderColor: [
                                          'rgba(255, 99, 132, 1)'
                                          , 'rgba(54, 162, 235, 1)'
                                          , 'rgba(255, 206, 86, 1)'
                                          , 'rgba(75, 192, 192, 1)'
                                          , 'rgba(153, 102, 255, 1)'
                                          , 'rgba(255, 159, 64, 1)'
                                    ]
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
            });
            document.addEventListener("DOMContentLoaded", function() {
                  var ctx = document.getElementById('myChart2').getContext('2d');
                  var myChart = new Chart(ctx, {
                        type: 'bar', // tipe chart, bisa 'line', 'bar', 'pie', dll.
                        data: {
                              labels: ['Jan - Feb', 'Mart - April', 'Mei - Juni', 'Juli - August', 'Sep - Oct', 'Nov - Des']
                              , datasets: [{
                                    label: '# of Votes'
                                    , data: [12, 19, 3, 5, 2, 3]
                                    , backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)'
                                          , 'rgba(54, 162, 235, 0.2)'
                                          , 'rgba(255, 206, 86, 0.2)'
                                          , 'rgba(75, 192, 192, 0.2)'
                                          , 'rgba(153, 102, 255, 0.2)'
                                          , 'rgba(255, 159, 64, 0.2)'
                                    ]
                                    , borderColor: [
                                          'rgba(255, 99, 132, 1)'
                                          , 'rgba(54, 162, 235, 1)'
                                          , 'rgba(255, 206, 86, 1)'
                                          , 'rgba(75, 192, 192, 1)'
                                          , 'rgba(153, 102, 255, 1)'
                                          , 'rgba(255, 159, 64, 1)'
                                    ]
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
            });

      </script>
</body>
@endsection
