@extends('layouts.main-layout')
@section('main')
<body style="background-color: #EEF5FF">
      <div class="d-flex">
            @include('partials.sidebar.sidebar-operator')
            <div class="h-100 w-100">
                  <div class="container-xxl px-3 py-3">
                        <div class="fw-medium">Dashboard</div>
                        <div class="row mt-3">
                              <div class="col-3">
                                    <div class="card card-dashboard shadow-sm">
                                          <div class="card-body d-flex align-items-center gap-3">
                                                <div style="background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); width: 60px; height: 60px; border-radius: 10px;" class="d-flex justify-content-center align-items-center box-icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff">
                                                            <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" />
                                                      </svg>
                                                </div>
                                                <div class="">
                                                      <div class="fw-bold" style="font-size: 18px">142</div>
                                                      <div class="fw-normal text-secondary" style="font-size: 12px">Total Barang</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-3">
                                    <div class="card card-dashboard shadow-sm">
                                          <div class="card-body d-flex align-items-center gap-3">
                                                <div style="background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%); width: 60px; height: 60px; border-radius: 10px;" class="d-flex justify-content-center align-items-center box-icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff">
                                                            <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" /></svg>
                                                </div>
                                                <div class="">
                                                      <div class="fw-bold" style="font-size: 18px">142</div>
                                                      <div class="fw-normal text-secondary" style="font-size: 12px">Total Barang</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-3">
                                    <div class="card card-dashboard shadow-sm">
                                          <div class="card-body d-flex align-items-center gap-3">
                                                <div style="background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%); width: 60px; height: 60px; border-radius: 10px;" class="d-flex justify-content-center align-items-center box-icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff">
                                                            <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" /></svg>
                                                </div>
                                                <div class="">
                                                      <div class="fw-bold" style="font-size: 18px">142</div>
                                                      <div class="fw-normal text-secondary" style="font-size: 12px">Total Barang</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-3">
                                    <div class="card card-dashboard shadow-sm">
                                          <div class="card-body d-flex align-items-center gap-3">
                                                <div style="background-image: linear-gradient(to top, #88d3ce 0%, #6e45e2 100%); width: 60px; height: 60px; border-radius: 10px;" class="d-flex justify-content-center align-items-center box-icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff">
                                                            <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" /></svg>
                                                </div>
                                                <div class="">
                                                      <div class="fw-bold" style="font-size: 18px">142</div>
                                                      <div class="fw-normal text-secondary" style="font-size: 12px">Total Barang</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="row mt-3">
                              <div class="col-6">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium text-secondary">Pemakaian Barang</div>
                                                <canvas id="myChartPemakaian"></canvas>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-6">
                                    <div class="card shadow-sm">
                                          <div class="card-body">
                                                <div class="fw-medium text-secondary">Pembelian Barang</div>
                                                <canvas id="myChartPemakaian"></canvas>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
@endsection
